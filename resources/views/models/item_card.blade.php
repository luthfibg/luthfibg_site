<div class="card me-3 mb-3" style="width: 18rem;">
    <div class="card-header d-flex flex-column">
        <div class="title-wrapper d-flex justify-content-between" style="flex-direction: row">
            <h5 class="card-title">{{ $item->name }}</h5>
            <span>
                <i class="fas fa-gear fa-sm"></i>
            </span>
        </div>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $item->subname }}</h6>
    </div>
    <div class="card-body">
        <p class="card-text">
            <i class="fa-solid fa-atom"></i> &nbsp;Teknologi
        </p>
        <div class="span-wrapper d-flex mb-3 flex-wrap">
            <span class="badge rounded-pill text-bg-info me-1 mb-1">html-css</span>
            <span class="badge rounded-pill text-bg-info me-1 mb-1">javascript</span>
            <span class="badge rounded-pill text-bg-info me-1 mb-1">ht6 sensorik</span>
            <span class="badge rounded-pill text-bg-info me-1 mb-1">raspberry</span>
            <span class="badge rounded-pill text-bg-info me-1 mb-1">hvu carbu sensor</span>
        </div>
        <p class="card-text">
            <i class="fa-solid fa-fire"></i> &nbsp;Tingkat Kesulitan
        </p>
        <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="{{ $item->effort_level }}" aria-valuemin="0" aria-valuemax="10" style="height: 0.8rem;background: var(--bright-gray);">
            <div class="progress-bar bg-info text-dark" style="width: {{ $item->effort_level*10 }}%;">{{ $item->effort_level }}</div>
        </div>
        <p class="card-text">
            <i class="fa-solid fa-percent"></i> &nbsp;Persentase
        </p>
        <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="{{ $item->percentage }}" aria-valuemin="0" aria-valuemax="100" style="height: 0.8rem;background: var(--bright-gray);">
            <div class="progress-bar bg-info text-dark" style="width: {{ $item->percentage }}%;">{{ $item->percentage }}</div>
        </div>
        <p class="card-text mb-3">
            <i class="fa-solid fa-clipboard-check"></i> &nbsp;Status:&nbsp;
            <span style="color: var(--cerulean);">{{ $item->status }}</span>
        </p>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link cl-fs">Detail</a>
        <a href="#" class="card-link">Github</a>
    </div>
</div>