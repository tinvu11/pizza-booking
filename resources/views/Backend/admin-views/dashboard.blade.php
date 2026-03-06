
@extends('masterTwo')
@section('title', 'DASHBOARD')

@section('main')
<style>
    .dash-stat-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        margin-bottom: 20px;
        transition: all 0.25s ease;
        position: relative;
        overflow: hidden;
        display: flex;
        min-height: 120px;
    }
    .dash-stat-card:hover {
       border-color: #cbd5e1;
    }
    .dash-stat-card .stat-img {
        width: 40%;
        flex-shrink: 0;
        overflow: hidden;
    }
    .dash-stat-card .stat-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .dash-stat-card .stat-body {
        flex: 1;
        padding: 20px 22px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .dash-stat-card .stat-label {
        font-size: 0.72rem;
        font-weight: 700;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }
    .dash-stat-card .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1;
    }
    .dash-stat-card .stat-subtitle {
        font-size: 0.75rem;
        color: #94a3b8;
        margin-top: 6px;
    }
    .stat-icon.bg-red { background: #ef4444; color: #fff; }
    .stat-icon.bg-amber { background: #f59e0b; color: #fff; }
    .stat-icon.bg-emerald { background: #10b981; color: #fff; }
    .stat-icon.bg-sky { background: #0ea5e9; color: #fff; }
    .stat-icon.bg-violet { background: #8b5cf6; color: #fff; }
    .stat-icon.bg-rose { background: #f43f5e; color: #fff; }
    .stat-icon.bg-indigo { background: #6366f1; color: #fff; }
    .stat-icon.bg-teal { background: #14b8a6; color: #fff; }



    /* Quick Access */
    .quick-access-section {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        height: 100%;
    }
    .quick-access-section h3 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0;
        padding-bottom: 14px;
        border-bottom: 2px solid #e2e8f0;
    }
    .quick-access-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-top: 18px;
    }
    .quick-access-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        text-decoration: none !important;
        color: #334155 !important;
        font-weight: 600;
        font-size: 0.82rem;
        transition: all 0.2s ease;
    }
    .quick-access-item:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
    }
    .quick-access-item i {
        font-size: 1rem;
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        background: #e2e8f0;
        color: #475569;
        flex-shrink: 0;
    }

    /* Feedback Section */
    .feedback-section {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        height: 100%;
    }
    .feedback-section h3 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0;
        padding-bottom: 14px;
        border-bottom: 2px solid #e2e8f0;
    }
    .feedback-item {
        display: flex;
        gap: 14px;
        padding: 14px 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .feedback-item:first-child {
        margin-top: 14px;
    }
    .feedback-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    .feedback-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background:  #f0ae56;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.85rem;
        flex-shrink: 0;
    }
    .feedback-content {
        flex: 1;
        min-width: 0;
    }
    .feedback-name {
        font-weight: 700;
        font-size: 0.85rem;
        color: #1e293b;
        margin-bottom: 3px;
    }
    .feedback-email {
        font-size: 0.72rem;
        color: #94a3b8;
        margin-bottom: 6px;
    }
    .feedback-text {
        font-size: 0.82rem;
        color: #475569;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .feedback-empty {
        text-align: center;
        padding: 40px 20px;
        color: #94a3b8;
    }
    .feedback-empty i {
        font-size: 2.5rem;
        margin-bottom: 12px;
        display: block;
    }

    .section-title {
        font-size: 1rem;
        font-weight: 700;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        margin-bottom: 16px;
    }
</style>

<div class="container-fluid p-0">
    <h2 style="font-size:1.4rem; font-weight:700; margin-bottom:24px;">Dashboard Overview</h2>

    {{-- Menu Category Cards --}}
    <div class="row">
        @php
            $categoryMeta = [
                'pizza'             => ['img' => 'pizza.jpg'],
                'garlic breads'     => ['img' => 'garlic.jpg'],
                'desserts'          => ['img' => 'desserts.jpg'],
                'beverages'         => ['img' => 'beverages.jpg'],
            ];
        @endphp

        @foreach($menuCounts as $menu => $count)
            @if(!isset($categoryMeta[$menu]))
                @continue
            @endif
            @php
                $meta = $categoryMeta[$menu];
            @endphp
            <div class="col-lg col-md-4 col-sm-6">
                <div class="dash-stat-card">
                    <div class="stat-img">
                        <img src="{{ asset('img_dashboard/' . $meta['img']) }}" alt="{{ $menu }}">
                    </div>
                    <div class="stat-body">
                        <div class="stat-label">{{ ucwords($menu) }}</div>
                        <div class="stat-number">{{ $count }}</div>
                        <div class="stat-subtitle">dishes</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Two Column: Quick Access + Feedback --}}
    <div class="row mt-2">
        {{-- Left: Quick Access --}}
        <div class="col-lg-7 mb-3">
            <div class="quick-access-section">
                <h3> Quick Access</h3>
                <div class="quick-access-grid">
                    <a href="{{route('menutable')}}" class="quick-access-item">
                        <i class="fas fa-bars"></i>
                        <span>Menu</span>
                    </a>
                    <a href="{{route('index_order')}}" class="quick-access-item">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                    <a href="{{route('delivery_order')}}" class="quick-access-item">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Delivery</span>
                    </a>
                    <a href="{{route('order_details')}}" class="quick-access-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Order Details</span>
                    </a>
                    <a href="{{route('usertable')}}" class="quick-access-item">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                    <a href="{{route('weekend')}}" class="quick-access-item">
                        <i class="fas fa-star"></i>
                        <span>Weekend Special</span>
                    </a>
                    <a href="{{route('gallery-admin')}}" class="quick-access-item">
                        <i class="fas fa-images"></i>
                        <span>Gallery</span>
                    </a>
                    <a href="{{route('location')}}" class="quick-access-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Location</span>
                    </a>
                    <a href="{{route('feedback')}}" class="quick-access-item">
                        <i class="fas fa-envelope"></i>
                        <span>Feedback</span>
                    </a>
                    <a href="{{route('franchiesinfo')}}" class="quick-access-item">
                        <i class="fas fa-handshake"></i>
                        <span>Franchise Info</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: Feedback --}}
        <div class="col-lg-5 mb-3">
            <div class="feedback-section">
                <h3> Recent Feedback</h3>
                @if($feedbacks->count() > 0)
                    @foreach($feedbacks as $fb)
                        <div class="feedback-item">
                            <div class="feedback-avatar">
                                {{ strtoupper(substr($fb->user->name ?? 'U', 0, 1)) }}
                            </div>
                            <div class="feedback-content">
                                <div class="feedback-name">{{ $fb->user->name ?? 'Anonymous' }}</div>
                                <div class="feedback-email">{{ $fb->user->email ?? '' }}</div>
                                <div class="feedback-text">{{ $fb->content }}</div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="feedback-empty">
                        <i class="fas fa-comment-slash"></i>
                        <p>No feedback yet</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop