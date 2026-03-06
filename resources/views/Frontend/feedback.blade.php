@extends('master')
@section('main')
@include('Frontend.partials.menu_carousel', ['carouselTitle' => 'FEEDBACK & REVIEWS'])

<style>
/* ===== FEEDBACK PAGE ===== */
.fb-hero {
   
  background: linear-gradient(135deg, #1e1e1e 0%, #2a2a2a 100%) ;padding: 60px 0 50px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.fb-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
  background: linear-gradient(135deg, #1e1e1e 0%, #2a2a2a 100%) ;
   pointer-events: none;
}
.fb-hero h1 {
    font-family: 'Oswald', sans-serif;
    font-size: 2.8rem;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 10px;
    position: relative;
}
.fb-hero p {
    color: #8899aa;
    font-size: 1.05rem;
    max-width: 500px;
    margin: 0 auto;
    line-height: 1.6;
    position: relative;
}
.fb-hero .accent-line {
    width: 60px;
    height: 3px;
    background: #f5a623;
    margin: 15px auto 20px;
    border-radius: 2px;
}

/* Main section */
.fb-section {
    max-width: 1200px;
    margin: -30px auto 60px;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}

/* Form Card */
.fb-form-card {
       background: #1e1e1e;
    border-radius: 16px;
    padding: 40px 35px;
    border: 1px solid rgba(255,255,255,0.06);
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    height: 100%;
}
.fb-form-card .card-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #f5a623, #e8941a);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 1.3rem;
    color: #fff;
}
.fb-form-card h3 {
    font-family: 'Oswald', sans-serif;
    color: #fff;
    font-size: 1.5rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}
.fb-form-card .card-desc {
    color: #7a8599;
    font-size: 0.9rem;
    margin-bottom: 25px;
    line-height: 1.5;
}
.fb-form-card label {
    color: #99aabb;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
}
.fb-form-card .form-control {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.1);
    color: #fff;
    border-radius: 10px;
    padding: 13px 16px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}
.fb-form-card .form-control:focus {
    border-color: #f5a623;
    box-shadow: 0 0 0 3px rgba(245,166,35,0.15);
    background: rgba(255,255,255,0.06);
}
.fb-form-card .form-control::placeholder {
    color: #556;
}
.fb-form-card textarea.form-control {
    resize: none;
}
.fb-btn-submit {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #f5a623, #e8941a);
    color: #fff;
    font-family: 'Oswald', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-top: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(245,166,35,0.3);
}

.fb-btn-submit:active {
    transform: translateY(0);
}
.fb-btn-submit i {
    margin-left: 8px;
}

/* Reviews Column */
.fb-reviews-card {
    background:   #1e1e1e;
    border-radius: 16px;
    padding: 40px 30px;
    border: 1px solid rgba(255,255,255,0.06);
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    height: 100%;
    display: flex;
    flex-direction: column;
}
.fb-reviews-card .card-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 1.3rem;
    color: #fff;
}
.fb-reviews-card h3 {
    font-family: 'Oswald', sans-serif;
    color: #fff;
    font-size: 1.5rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}
.fb-reviews-card .card-desc {
    color: #7a8599;
    font-size: 0.9rem;
    margin-bottom: 20px;
}
.fb-reviews-scroll {
    flex: 1;
    overflow-y: auto;
    max-height: 420px;
    padding-right: 8px;
}
.fb-reviews-scroll::-webkit-scrollbar { width: 5px; }
.fb-reviews-scroll::-webkit-scrollbar-track { background: transparent; }
.fb-reviews-scroll::-webkit-scrollbar-thumb { background: #f5a623; border-radius: 10px; }

/* Review item */
.fb-review {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px;
    padding: 18px 20px;
    margin-bottom: 14px;
    transition: all 0.3s ease;
}
.fb-review:hover {
    background: rgba(255,255,255,0.05);
    border-color: rgba(245,166,35,0.2);
}
.fb-review-header {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}
.fb-avatar {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
    color: #fff;
    margin-right: 12px;
    flex-shrink: 0;
}
.fb-avatar.av-orange { background: linear-gradient(135deg, #f5a623, #e8941a); }
.fb-avatar.av-red    { background: linear-gradient(135deg, #e74c3c, #c0392b); }
.fb-avatar.av-blue   { background: linear-gradient(135deg, #3498db, #2980b9); }
.fb-avatar.av-green  { background: linear-gradient(135deg, #27ae60, #219a52); }
.fb-avatar.av-purple { background: linear-gradient(135deg, #9b59b6, #8e44ad); }

.fb-review-name {
    font-weight: 700;
    color: #eee;
    font-size: 0.95rem;
    line-height: 1.2;
}
.fb-review-stars {
    color: #f5a623;
    font-size: 0.7rem;
    margin-top: 3px;
}
.fb-review-stars i { margin-right: 1px; }
.fb-review-text {
    color: #99aabb;
    font-size: 0.92rem;
    line-height: 1.6;
    margin: 0;
    padding-left: 54px;
    font-style: italic;
}

/* Stats bar */
.fb-stats {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
    flex-wrap: wrap;
}
.fb-stat-item {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 10px;
    padding: 12px 18px;
    text-align: center;
    flex: 1;
    min-width: 80px;
}
.fb-stat-item .stat-num {
    font-family: 'Oswald', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #f5a623;
    line-height: 1;
}
.fb-stat-item .stat-label {
    font-size: 0.7rem;
    color: #7a8599;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 4px;
}

/* Login notice */
.fb-login-notice {
    background: rgba(245,166,35,0.08);
    border: 1px solid rgba(245,166,35,0.2);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    margin-top: 10px;
}
.fb-login-notice i {
    font-size: 2rem;
    color: #f5a623;
    margin-bottom: 10px;
}
.fb-login-notice p {
    color: #99aabb;
    margin: 0;
    font-size: 0.95rem;
}
.fb-login-notice a {
    color: #f5a623;
    font-weight: 700;
    text-decoration: underline;
}

/* Alert */
.fb-alert {
    background: rgba(39,174,96,0.1);
    border: 1px solid rgba(39,174,96,0.3);
    border-radius: 8px;
    padding: 10px 15px;
    color: #27ae60;
    margin-bottom: 15px;
}

/* Responsive */
@media (max-width: 768px) {
    .fb-hero h1 { font-size: 2rem; }
    .fb-form-card, .fb-reviews-card { padding: 25px 20px; }
    .fb-section { padding: 0 15px; }
    .fb-review-text { padding-left: 0; margin-top: 8px; }
    .fb-stats { gap: 10px; }
}
</style>

{{-- Hero Section --}}


{{-- Main Content --}}
<div class="fb-section">
    <div class="row" style="margin-top: 90px; ">

        {{-- Left: Form --}}
        <div class="col-lg-5 mb-4">
            <div class="fb-form-card">
                <h3>Send Us Feedback</h3>
                <p class="card-desc">Your opinion makes us better. Share what you loved or how we can improve.</p>

                @if(Auth::check())
                @if($message = Session::get('success'))
                    <div class="fb-alert">
                        <i class="fas fa-check-circle mr-2"></i>{{$message}}
                    </div>
                @endif
                <form action="{{route('postFeedBack')}}" method='POST'>
                    @csrf
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="text" class="form-control" value="{{Auth::User()->email}}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name='txtFeedBack' class="form-control" rows="5" placeholder="Tell us about your experience... Was it the perfect crust, the sauce, or something else?" required></textarea>
                    </div>
                    <button type="submit" class="fb-btn-submit">
                        Send Feedback <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                @else
                <form action="{{route('checkFeed')}}" method='POST'>
                    @csrf
                    @if($message = Session::get('fail'))
                        <div class="fb-alert">
                            <i class="fas fa-check-circle mr-2"></i>{{$message}}
                        </div>
                    @endif
                    <div class="fb-login-notice">
                        <i class="fas fa-lock"></i>
                        <p>Please <a href="#" data-toggle='modal' id='modalLogin'>sign in</a> to leave your feedback.</p>
                    </div>
                    <div class="form-group mt-3">
                        <label>Your Email</label>
                        <input type="text" class="form-control" placeholder="example@email.com" disabled>
                    </div>
                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name='txtFeedBack' class="form-control" rows="5" placeholder="Login required to leave feedback..." disabled></textarea>
                    </div>
                    <button type="submit" class="fb-btn-submit" name='btnFeed' disabled style="opacity: 0.5; cursor: not-allowed;">
                        Send Feedback <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                @endif
            </div>
        </div>

        {{-- Right: Reviews --}}
        <div class="col-lg-7 mb-4">
            <div class="fb-reviews-card">
                <h3>Customer Reviews</h3>
                <p class="card-desc">See what our pizza lovers are saying</p>

                {{-- Stats --}}
          

                {{-- Review list --}}
                <div class="fb-reviews-scroll">
                    @php $avatarColors = ['av-orange','av-red','av-blue','av-green','av-purple']; @endphp
                    @foreach($feedBack as $index => $select_feed)
                    <div class="fb-review">
                        <div class="fb-review-header">
                            <div class="fb-avatar {{ $avatarColors[$index % 5] }}">
                                {{ strtoupper(substr($select_feed->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <div>
                                <div class="fb-review-name">{{ $select_feed->user->name ?? 'Unknown' }}</div>
                                <div class="fb-review-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="fb-review-text">"{{ $select_feed->content }}"</p>
                        <small style="padding-left: 54px; color: #556;">{{ $select_feed->created_at->diffForHumans() }}</small>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@stop

