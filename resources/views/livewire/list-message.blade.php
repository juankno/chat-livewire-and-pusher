<div>
    <div class="px-4 py-5 chat-box bg-white">
        {{-- <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>


                <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>--}}

        <ul>
            @foreach($messages as $message)
            <li>
            {{ $message }}
            </li>
            @endforeach
        </ul>



    </div>
</div>