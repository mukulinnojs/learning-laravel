<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Mail</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex">

    <aside class="sidebar w-fit h-screen border-r-2 border-r-gray-100 flex flex-col justify-center p-3">

        {{-- Top Info Container --}}
        <div>

            <div class="flex gap-2 items-center p-3 border-b-2 border-b-gray-100">
                <div class="flex gap-2 items-center">
                    <img class="h-15" src="images/pfp.png" alt="profile-picture">
                    <div class="flex flex-col">
                        <p class="font-semibold">Simple Mail</p>
                        <p class="text-gray-500">simple@mail.co</pc>
                    </div>
                </div>
                <i class="fa-solid fa-arrow-down"></i>
            </div>

            <ul class="flex flex-col justify-center gap-4 p-5">
                <li>
                    <button
                        class="js-compose-btn px-3 py-2 bg-purple-500 flex gap-3 items-center text-white rounded-sm mb-3 hover:bg-purple-700 ease-in-out duration-100"
                        data-target="compose-mail">
                        <i class="fa-solid fa-edit"></i>
                        <p>Compose</p>
                    </button>
                </li>
                <li>
                    <button class="nav-btns"> <i class="fa-solid fa-inbox"></i>
                        <p>Inbox</p>
                    </button>
                </li>
                <li>
                    <button class="nav-btns"> <i class="fa-solid fa-paper-plane"></i>
                        <p>Sent</p>
                    </button>
                </li>
                <li>
                    <button class="nav-btns"> <i class="fa-solid fa-stamp"></i>
                        <p>Spam</p>
                    </button>
                </li>
                <li>
                    <button class="nav-btns"> <i class="fa-solid fa-file"></i>
                        <p>Drafts</p>
                    </button>
                </li>
                <li>
                    <button class="nav-btns"> <i class="fa-solid fa-trash"></i>
                        <p>Trash</p>
                    </button>
                </li>
            </ul>
        </div>

        <ul class="flex flex-col justify-center gap-4 p-5 mt-auto align-self-end">
            <li>
                <button class="nav-btns"> <i class="fa-solid fa-upload"></i>
                    <p>Import mail</p>
                </button>
            </li>
            <li>
                <button class="nav-btns"> <i class="fa-solid fa-user-plus"></i>
                    <p>3 invites left...</p>
                </button>
            </li>
            <li>
                <button class="nav-btns">
                    <i class="fa-solid fa-message"></i>
                    <p>Feedback</p>
                </button>
            </li>
        </ul>
    </aside>

    {{-- Compose Modal --}}
    <div class="js-compose-mail" id="compose-mail">
        <div class="bg-white rounded-lg w-250" id="compose-modal">
            {{-- Modal header --}}
            <div class="flex justify-between items-center grow p-5">
                <p class="font-bold">New message</p>
                <i class="js-close-modal fa-solid fa-xmark hover:text-purple-500 ease-in-out duration-75"></i>
            </div>

            {{-- Email Form --}}
            <form action="" class="flex flex-col gap-5 p-5">
                <div class="compose-inputs">
                    <label for="to">To</label>
                    <input type="text" id="to" name='to' placeholder="Search or add a contact">
                </div>
                <div class="compose-inputs">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name='subject' placeholder="Add a subject">
                </div>
                {{-- <div class="compose-inputs">
                    <label for="from">From</label>
                    <input type="text" id="from" name='from' placeholder="Your Email">
                </div> --}}
                <textarea name="message" id="message" rows="10" placeholder="Write your message here..."></textarea>
                <button type="submit"
                    class="px-3 py-2 bg-purple-500 flex gap-3 items-center text-white rounded-sm mb-3 hover:bg-purple-700 ease-in-out duration-100 w-fit self-end">
                    <i class="fa-solid fa-paper-plane"></i>
                    <p>Send</p>
                </button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/8ca638229f.js" crossorigin="anonymous"></script>
</body>

</html>