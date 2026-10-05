@extends('layouts.admin.master')

@section('title', 'Upload Images')

@section('page_level_style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .image-container {
        position: relative;
        margin-bottom: 20px;
    }

    .image-actions {
        position: absolute;
        top: 10px;
        right: 10px;
        display: none;
    }

    .image-container:hover .image-actions {
        display: block;
    }

    .copy-link {
        cursor: pointer;
    }

    .toast {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
    }

    /* Drag and drop styles */
    .upload-area {
        border: 3px dashed #ccc;
        border-radius: 5px;
        padding: 30px;
        text-align: center;
        margin-bottom: 20px;
        transition: all 0.3s;
        cursor: pointer;
    }

    .upload-area:hover,
    .upload-area.dragover {
        border-color: #0d6efd;
        background-color: #f8f9fa;
    }

    .upload-area i {
        font-size: 50px;
        margin-bottom: 10px;
        color: #6c757d;
    }

    .upload-area p {
        margin-bottom: 0;
    }

    .h-100px {
        height: 100px;
    }

    .progress {
        height: 10px;
        margin-top: 10px;
        display: none;
    }

    #fileList {
        margin-top: 15px;
    }

    .file-item {
        display: flex;
        align-items: center;
        padding: 5px;
        border-bottom: 1px solid #eee;
    }

    .file-item:last-child {
        border-bottom: none;
    }

    .file-icon {
        margin-right: 10px;
        color: #6c757d;
    }

    .file-name {
        flex-grow: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .file-size {
        color: #6c757d;
        margin-right: 10px;
    }

    #image {
        display: none;
    }
</style>
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Image Uploader</h1>
            </div>
            <div class="col-sm-6">
                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Upload and Manage Images</h3>
                    </div>

                    <div class="card-body">
                        <div class="container mt-3">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form id="uploadForm" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Drag and drop area -->
                                        <div class="upload-area" id="uploadArea">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <h5>Drag & Drop Images Here</h5>
                                            <p>or</p>
                                            <button type="button" class="btn btn-primary" onclick="document.getElementById('image').click()">
                                                Select Files
                                            </button>
                                            <input type="file" id="image" name="image[]" accept="image/*" multiple>
                                        </div>

                                        <!-- File list and progress -->
                                        <div id="fileList"></div>
                                        <div class="progress" id="uploadProgress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"></div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-3" id="uploadBtn">Upload Images</button>
                                    </form>
                                </div>
                            </div>

                            <div class="row" id="imageGallery">
                                @foreach($images as $image)
                                <div class="col-md-4 col-lg-3 mb-4 image-container h-100px">
                                    <img src="{{ $image->url }}" alt="{{ $image->name }}" class="img-thumbnail w-100">
                                    <div class="image-actions">
                                        <button class="btn btn-sm btn-danger delete-image" data-id="{{ $image->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info copy-link" data-url="{{ $image->url }}">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true" id="toast">
                            <div class="d-flex">
                                <div class="toast-body"></div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page_level_script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const toast = new bootstrap.Toast(document.getElementById('toast'));
        let filesToUpload = [];

        // Drag and drop functionality
        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('image');

        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');

            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                handleFiles(e.dataTransfer.files);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length) {
                handleFiles(e.target.files);
            }
        });

        function handleFiles(files) {
            filesToUpload = Array.from(files);
            updateFileList();
        }

        function updateFileList() {
            const fileList = $('#fileList');
            fileList.empty();

            if (filesToUpload.length === 0) {
                return;
            }

            filesToUpload.forEach((file, index) => {
                const fileItem = $(`
                    <div class="file-item">
                        <i class="file-icon fas fa-file-image"></i>
                        <span class="file-name">${file.name}</span>
                        <span class="file-size">${formatFileSize(file.size)}</span>
                        <button class="btn btn-sm btn-outline-danger remove-file" data-index="${index}">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `);
                fileList.append(fileItem);
            });
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Remove file from list
        $(document).on('click', '.remove-file', function() {
            const index = $(this).data('index');
            filesToUpload.splice(index, 1);
            updateFileList();

            // Update the file input
            const dataTransfer = new DataTransfer();
            filesToUpload.forEach(file => dataTransfer.items.add(file));
            fileInput.files = dataTransfer.files;
        });

        // Handle form submission
        $('#uploadForm').on('submit', function(e) {
            e.preventDefault();

            if (filesToUpload.length === 0) {
                $('.toast-body').text('Please select files to upload');
                toast.show();
                return;
            }

            const formData = new FormData();
            formData.append('_token', $('input[name="_token"]').val());

            // Add all files to FormData
            filesToUpload.forEach((file, index) => {
                formData.append(`image[${index}]`, file);
            });

            const progressBar = $('.progress-bar');
            const progressContainer = $('#uploadProgress');

            // Disable upload button during upload
            $('#uploadBtn').prop('disabled', true);
            progressContainer.show();

            $.ajax({
                url: "{{ route('images.store') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function() {
                    const xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                            const percent = Math.round((e.loaded / e.total) * 100);
                            progressBar.css('width', percent + '%').attr('aria-valuenow', percent);
                        }
                    });
                    return xhr;
                },
                success: function(response) {
                    if (response.success) {
                        // Add new images to gallery
                        if (Array.isArray(response.images)) {
                            response.images.forEach(image => {
                                $('#imageGallery').prepend(`
                                    <div class="col-md-4 col-lg-3 mb-4 image-container h-100px">
                                        <img src="${image.url}" alt="${image.name}" class="img-thumbnail w-100">
                                        <div class="image-actions">
                                            <button class="btn btn-sm btn-danger delete-image" data-id="${image.id}">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button class="btn btn-sm btn-info copy-link" data-url="${image.url}">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                    </div>
                                `);
                            });
                        }

                        // Reset form
                        $('#uploadForm')[0].reset();
                        filesToUpload = [];
                        updateFileList();

                        // Show success message
                        $('.toast-body').text(response.message);
                        toast.show();
                    }
                },
                error: function(xhr) {
                    $('.toast-body').text(xhr.responseJSON?.message || 'Upload failed');
                    toast.show();
                },
                complete: function() {
                    $('#uploadBtn').prop('disabled', false);
                    progressContainer.hide();
                    progressBar.css('width', '0%').attr('aria-valuenow', 0);
                }
            });
        });

        // Handle delete button click
        $(document).on('click', '.delete-image', function() {
            if (confirm('Are you sure you want to delete this image?')) {
                const imageId = $(this).data('id');
                const imageElement = $(this).closest('.image-container');

                $.ajax({
                    url: `/admin/images/${imageId}`,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            imageElement.remove();
                            $('.toast-body').text(response.message);
                            toast.show();
                        }
                    },
                    error: function(xhr) {
                        $('.toast-body').text(xhr.responseJSON?.message || 'Delete failed');
                        toast.show();
                    }
                });
            }
        });

        // Handle copy link button click
        $(document).on('click', '.copy-link', function() {
            const url = $(this).data('url');
            navigator.clipboard.writeText(url).then(function() {
                $('.toast-body').text('Link copied to clipboard!');
                toast.show();
            }, function() {
                $('.toast-body').text('Failed to copy link');
                toast.show();
            });
        });
    });
</script>
@endsection