<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Comments</th>
                                    <th>Image</th>
                                    <th>Background</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $testimonial->person_name }}</td>
                                        <td>{{ $testimonial->person_designation }}</td>
                                        <td>{{ $testimonial->person_comment }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $testimonial->person_image) }}" alt=""
                                                style="height: 90px; width: 90px;">
                                        </td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $testimonial->bg_image) }}" alt=""
                                                style="height: 90px; width: 90px;">
                                        </td>
                                        <td class="pt_10 pb_10" style="width:130px">
                                            <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('testimonial.show', $testimonial->id) }}"
                                                class="btn btn-danger"
                                                onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<div class="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <h2>Client Testimonials</h2>
                    <h3>See What My Clients Tell</h3>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme testimonial-carousel owl-loaded">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3378px;"><div class="owl-item active" style="width: 1116px; margin-right: 10px;"><div class="item">
                            <div class="photo d-flex justify-content-center">
                                <img src="images/t1.jpg" alt="">
                            </div>
                            <div class="comment">
                                Ad sea commodo tincidunt. Perfecto pericula ut eum, ei usu fugit utroque qualisque. Ius no illud prodesset repudiandae, mei fastidii iudicabit id. Zril democritum an cum, mel cu solet diceret. Est error abhorreant contentiones ea, in stet intellegebat eum.
                            </div>
                            <div class="person-detail">
                                <h3>Patrick Henderson</h3>
                                <h4>CEO, ABC Software</h4>
                            </div>
                        </div></div><div class="owl-item" style="width: 1116px; margin-right: 10px;"><div class="item">
                            <div class="photo d-flex justify-content-center">
                                <img src="images/t2.jpg" alt="">
                            </div>
                            <div class="comment">
                                Minim scriptorem eos te, debet habemus laboramus usu te. Ei mel alia graeco melius, ius elit tacimates consectetuer ea. Erat exerci menandri no his, primis repudiare at vix, cu quod novum nemore vix. Ne lucilius maluisset persequeris mea, vix inermis accusamus.
                            </div>
                            <div class="person-detail">
                                <h3>David Scott</h3>
                                <h4>Founder, ZZ Multimedia</h4>
                            </div>
                        </div></div><div class="owl-item" style="width: 1116px; margin-right: 10px;"><div class="item">
                            <div class="photo d-flex justify-content-center">
                                <img src="images/t3.jpg" alt="">
                            </div>
                            <div class="comment">
                                Vis summo suscipit splendide ne, ad augue consul impetus vel. Et qui inani utroque accusata, sit tation fastidii ut, eos ex natum urbanitas. Dolorum civibus democritum in usu. Quodsi accusam appellantur quo id, ea mel saepe viderer. Nam id stet comprehensam.
                            </div>
                            <div class="person-detail">
                                <h3>Brent Grundy</h3>
                                <h4>Director, MN Business Solution</h4>
                            </div>
                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                </div>
            </div>
        </div>
    </div> --}}
