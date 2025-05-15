<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Mail</title>
    @vite('resources/css/app.css')
</head>

<body>

    <aside class="sidebar w-fit h-screen border-r-2 border-r-gray-100 flex flex-col">

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

            <ul>
                <li><button>Compose</button></li>
                <li><button>Inbox</button></li>
                <li><button>Sent</button></li>
                <li><button>Spam</button></li>
                <li><button>Drafts</button></li>
                <li><button> Trash</button></li>
            </ul>
        </div>

        <ul class="">
            <li>Import mail</li>
            <li>3 invites left...</li>
            <li>Feedback</li>
        </ul>

    </aside>

    <script src="https://kit.fontawesome.com/8ca638229f.js" crossorigin="anonymous"></script>
</body>

</html>