 <ul class="email-media-list">
        @foreach ($contacts as $contact )
            <li class="media mail-read">
            <div class="media-left pr-50">
                <div class="avatar">
                <img src="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar img holder" />
                </div>
                <div class="user-action">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1"></label>
                </div>
                <span class="email-favorite"><i data-feather="star"></i></span>
                </div>
            </div>
            <div class="media-body">

                <div class="mail-details">
                <div class="mail-items">
                    <h5 class="mb-25">{{$contact->name}}</h5>
                    <span class="text-truncate">🎯 Focused impactful open system </span>
                </div>
                <div class="mail-meta-item">
                    <span class="mr-50 bullet bullet-success bullet-sm"></span>
                    <span class="mail-date">{{ \Carbon\Carbon::parse($contact->created_at)->format('d M y, h::m') }}</span>
                </div>
                </div>
                <div class="mail-message">
                <p class="text-truncate  mb-0">
                        {{$contact->message}}
                </p>
                </div>
            </div>
            </li>
        @endforeach
            <div class="no-results">
            <h5>No Items Found</h5>
            </div>
    </ul>
