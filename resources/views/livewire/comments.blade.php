<div>
    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
        aria-labelledby="pills-contact-tab">
        <div class="single-product-desc">
            <div class="row">
                <div class="col-lg-7">
                    <div class="review-wrapper">
                        @if (count($rate)!=0)
                            @foreach ($rate as $item)
                                <div class="single-review">
                                    <div class="review-img">   
                                        <img src="{{ asset(($item['user']['avatar']==null) ? 'uploads/avatar/default-avatar.jpg':'uploads/avatar/'.$item['user']['avatar'] )}}" width="50px" style="border-radius: 50%" alt="" />
                                    </div>
                                    <div class="review-content w-100">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>{{ $item['user']['display_name'] }}</h4>
                                                </div>
                                                <div class="rating-product">
                                                    @for ($i = 0; $i < $item['rate']; $i++)
                                                        <i class="ion-android-star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-bottom w-100">
                                            <p>
                                                {{ $item['comment'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Sản phẩm chưa có đánh giá</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ratting-form-wrapper">
                        @if (auth()->check())
                            <h3>Add a Review</h3>
                            <div class="ratting-form">
                                <form action="" wire:submit.prevent="addCmt({{ Auth::id() }})">
                                    <div class="star-box">
                                        <span style="margin-top: 2px;">Your rating:</span>
                                        <div class="rating-product">
                                            <div class="stars">
                                                 <input class="star star-5" id="star-5" type="radio" name="rate" value="5" wire:model="rating" /> <label class="star star-5" for="star-5"></label> <input class="star star-4" id="star-4" type="radio" name="rate" value="4" wire:model="rating" /> <label class="star star-4" for="star-4"></label> <input class="star star-3" id="star-3" type="radio" name="rate" value="3" wire:model="rating" /> <label class="star star-3" for="star-3"></label> <input class="star star-2" id="star-2" type="radio" name="rate" value="2" wire:model="rating" /> <label class="star star-2" for="star-2"></label> <input class="star star-1" id="star-1" type="radio" name="rate" value="1" wire:model="rating" /> <label class="star star-1" for="star-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="rating-form-style form-submit">
                                                <textarea name="comment" placeholder="Message" wire:model="comment"></textarea>
                                                <button class="btn btn-dark btn--md">
                                                    <span>Review</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @else
                            <h3><a href="{{ route('login') }}" style="color: #5a5ad0">Login</a> to add review</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
