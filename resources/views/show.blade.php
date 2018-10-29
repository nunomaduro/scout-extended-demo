<div class="card">
    <div class="card-body">
        <p class="card-text">{{ $model->body }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><strong>Author</strong>: {{ $model->author }}</small>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><strong>Image</strong>: {{ $model->image_url }}</small>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><strong>Views</strong>: {{ $model->views_count }}</small>
        </div>
    </div>
</div>
