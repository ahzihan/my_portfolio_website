<div class="home-skill">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <h2>My Skill</h2>
                    <h3>My Expertise Area</h3>
                </div>
                <div class="col-md-6 wow fadeInLeft">
                    @php $i=0; @endphp
                    @foreach ($skillLeft as $left)
                    @php $i++; @endphp
                        <div class="progress-text">{{ $left->skill_name }}</div>
                        <div class="progress">
                            <div class="progress-bar anim_left{{ $i }} w-0" role="progressbar" aria-label="Example with label" aria-valuenow="{{ $left->score }}" aria-valuemin="0" aria-valuemax="100">{{ $left->score }}%</div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6 wow fadeInRight">
                    @php $i=0; @endphp
                    @foreach ($skillRight as $item)
                    @php $i++; @endphp
                        <div class="progress-text">{{ $item->skill_name }}</div>
                        <div class="progress">
                            <div class="progress-bar anim_right{{ $i }} w-0" role="progressbar" aria-label="Example with label" aria-valuenow="{{ $item->score }}" aria-valuemin="0" aria-valuemax="100">{{ $item->score }}%</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


