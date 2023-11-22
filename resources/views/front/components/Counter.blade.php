<div class="home-counter">
    <div class="container">
        <div class="row counter-items">
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $counterInfo->clients_number }}</div>
                <div class="text">{{ $counterInfo->clients_title }}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $counterInfo->project_number }}</div>
                <div class="text">{{ $counterInfo->project_title }}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $counterInfo->student_number }}</div>
                <div class="text">{{ $counterInfo->student_title }}</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">{{ $counterInfo->product_number }}</div>
                <div class="text">{{ $counterInfo->product_title }}</div>
            </div>
        </div>
    </div>
</div>
