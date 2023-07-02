<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url("./dist/css/app.css");?>">
</head>

<body>
    <div class="container absolute left-2/4 z-10 mx-auto -translate-x-2/4 p-4">
        <nav class="block w-full max-w-screen-2xl rounded-xl bg-transparent text-white shadow-none p-3">
            <div class="container mx-auto flex items-center justify-between text-white"><a href="#/">
                    <p
                        class="block antialiased font-sans text-base leading-relaxed text-inherit mr-4 ml-2 cursor-pointer py-1.5 font-bold">
                        Material Tailwind React</p>
                </a>
                <div class="hidden lg:block">
                    <ul
                        class="mb-4 mt-2 flex flex-col gap-2 text-inherit lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/home"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path
                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                    </path>
                                    <path
                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                    </path>
                                </svg>home</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/profile"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>profile</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/sign-in"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>Sign In</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/sign-up"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path
                                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>Sign Up</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a href="https://www.material-tailwind.com/docs/react/installation" target="_blank"
                                class="flex items-center gap-1 p-1 font-normal"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"
                                        clip-rule="evenodd"></path>
                                    <path
                                        d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z">
                                    </path>
                                </svg>Docs</a>
                        </li>
                    </ul>
                </div>
                <div class="hidden gap-2 lg:flex"><a href="https://www.material-tailwind.com/blocks?ref=mtkr"
                        target="_blank"><button
                            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-white hover:bg-white/10 active:bg-white/30 block w-full"
                            type="button" style="position: relative; overflow: hidden;">pro version</button></a><a
                        href="https://www.creative-tim.com/product/material-tailwind-kit-react" target="_blank"
                        class="hidden lg:inline-block"><button
                            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] block w-full"
                            type="button">free download</button></a></div><button
                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs ml-auto text-inherit hover:bg-transparent focus:bg-transparent active:bg-transparent lg:hidden"
                    type="button"><span
                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg></span></button>
            </div>
            <div class="block w-full basis-full overflow-hidden rounded-xl bg-white px-4 pt-2 pb-4 text-blue-gray-900"
                style="height: 0px; opacity: 0;">
                <div class="container mx-auto">
                    <ul
                        class="mb-4 mt-2 flex flex-col gap-2 text-inherit lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/home"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path
                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                    </path>
                                    <path
                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                    </path>
                                </svg>home</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/profile"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>profile</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/sign-in"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>Sign In</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a class="flex items-center gap-1 p-1 font-normal" href="#/sign-up"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path
                                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>Sign Up</a>
                        </li>
                        <li
                            class="block antialiased font-sans text-sm font-light leading-normal text-inherit capitalize">
                            <a href="https://www.material-tailwind.com/docs/react/installation" target="_blank"
                                class="flex items-center gap-1 p-1 font-normal"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-[18px] h-[18px] opacity-75 mr-1">
                                    <path fill-rule="evenodd"
                                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"
                                        clip-rule="evenodd"></path>
                                    <path
                                        d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z">
                                    </path>
                                </svg>Docs</a>
                        </li>
                    </ul><a href="https://www.material-tailwind.com/blocks/react?ref=mtkr" target="_blank"
                        class="mb-2 block"><button
                            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30 block w-full"
                            type="button">pro version</button></a><a
                        href="https://www.creative-tim.com/product/material-tailwind-kit-react" target="_blank"
                        class="w-full block"><button
                            class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] block w-full"
                            type="button">free download</button></a>
                </div>
            </div>
        </nav>
    </div>
    <section class="relative block h-[50vh]">
        <div
            class="bg-profile-background absolute top-0 h-full w-full bg-[url('/material-tailwind-kit-react/img/background-1.jpg')] bg-cover bg-center">
        </div>
        <div class="absolute top-0 h-full w-full bg-black/75 bg-cover bg-center"></div>
    </section>
    <section class="relative bg-blue-gray-50/50 py-16 px-4">
        <div class="container mx-auto">
            <div
                class="relative mb-6 -mt-64 flex w-full min-w-0 flex-col break-words rounded-3xl bg-white shadow-xl shadow-gray-500/5">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="flex w-full justify-center px-4 lg:order-2 lg:w-3/12">
                            <div class="relative">
                                <div class="-mt-20 w-40"><img src="<?=base_url();?>/img/team-2.jpg"
                                        alt="Profile picture"
                                        class="inline-block relative object-cover object-center !rounded-full rounded-lg h-full w-full shadow-xl">
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 flex w-full justify-center px-4 lg:order-3 lg:mt-0 lg:w-4/12 lg:justify-end lg:self-center">
                            <button
                                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-blue-400"
                                type="button">Conntect</button>
                        </div>
                        <div class="w-full px-4 lg:order-1 lg:w-4/12">
                            <div class="flex justify-center py-4 pt-8 lg:pt-4">
                                <div class="mr-4 p-3 text-center">
                                    <p
                                        class="block antialiased font-sans text-xl leading-relaxed text-blue-gray-900 font-bold uppercase">
                                        22</p>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                        Friends</p>
                                </div>
                                <div class="mr-4 p-3 text-center">
                                    <p
                                        class="block antialiased font-sans text-xl leading-relaxed text-blue-gray-900 font-bold uppercase">
                                        10</p>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                        Photos</p>
                                </div>
                                <div class="p-3 text-center lg:mr-4">
                                    <p
                                        class="block antialiased font-sans text-xl leading-relaxed text-blue-gray-900 font-bold uppercase">
                                        89</p>
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                                        Comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-8 text-center">
                        <h2
                            class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 mb-2">
                            Jenna Stones</h2>
                        <div class="mb-16 flex items-center justify-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="-mt-px h-4 w-4 text-blue-gray-700">
                                <path fill-rule="evenodd"
                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-medium text-blue-gray-700">
                                Los Angeles, California</p>
                        </div>
                        <div class="mb-2 flex items-center justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                class="-mt-px h-4 w-4 text-blue-gray-700">
                                <path fill-rule="evenodd"
                                    d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z">
                                </path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-medium text-blue-gray-700">
                                Solution Manager - Creative Tim Officer</p>
                        </div>
                        <div class="mb-2 flex items-center justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                class="-mt-px h-4 w-4 text-blue-gray-700">
                                <path
                                    d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                                    clip-rule="evenodd"></path>
                                <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"></path>
                            </svg>
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-medium text-blue-gray-700">
                                University of Computer Science</p>
                        </div>
                    </div>
                    <div class="mb-10 border-t border-blue-gray-50 py-6 text-center">
                        <div class="mt-2 flex flex-wrap justify-center">
                            <div class="flex w-full flex-col items-center px-4 lg:w-9/12">
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed mb-8 font-normal text-blue-gray-500">
                                    An artist of considerable range, Jenna the name taken by Melbourne-raised,
                                    Brooklyn-based Nick Murphy writes, performs and records all of his own music,
                                    giving it a warm, intimate feel with a solid groove structure. An artist of
                                    considerable range.</p><button
                                    class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg text-blue-500 hover:bg-blue-500/10 active:bg-blue-500/30"
                                    type="button">Show more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-blue-gray-50/50">
        <footer class="relative px-4 pt-8 pb-6">
            <div class="container mx-auto">
                <div class="flex flex-wrap pt-6 text-center lg:text-left">
                    <div class="w-full px-4 lg:w-6/12">
                        <h4
                            class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900 mb-4">
                            Material Tailwind</h4>
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-500">
                            Easy to use React components for Tailwind CSS and Material Design.</p>
                        <div class="mx-auto mt-6 mb-8 flex justify-center gap-2 md:mb-0 lg:justify-start"><a
                                href="https://www.facebook.com/CreativeTim" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-blue-500">
                                            <i class="fa-brands fa-facebook"></i>
                                        </p>
                                    </span></button></a><a href="https://www.twitter.com/creativetim" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-light-blue-500">
                                            <i class="fa-brands fa-twitter"></i>
                                        </p>
                                    </span></button></a><a href="https://www.instagram.com/creativetimofficial/"
                                target="_blank" rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-purple-500">
                                            <i class="fa-brands fa-instagram"></i>
                                        </p>
                                    </span></button></a><a href="https://www.dribbble.com/creativetim" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-pink-500">
                                            <i class="fa-brands fa-dribbble"></i>
                                        </p>
                                    </span></button></a><a
                                href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-red-500">
                                            <i class="fa-brands fa-youtube"></i>
                                        </p>
                                    </span></button></a><a
                                href="https://github.com/creativetimofficial/material-tailwind" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] text-xs bg-white text-blue-gray-900 shadow-md shadow-blue-gray-500/10 hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none rounded-full"
                                    type="button"><span
                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                        <p
                                            class="block antialiased font-sans text-base font-light leading-relaxed text-black">
                                            <i class="fa-brands fa-github"></i>
                                        </p>
                                    </span></button></a></div>
                    </div>
                    <div class="mx-auto mt-12 grid w-max grid-cols-2 gap-24 lg:mt-0">
                        <div>
                            <p
                                class="antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-2 block font-medium uppercase">
                                useful links</p>
                            <ul class="mt-3">
                                <li><a href="https://www.creative-tim.com/presentation" target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">About
                                        Us</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Blog</a>
                                </li>
                                <li><a href="https://www.github.com/creativetimofficial/material-tailwind?ref=mtk"
                                        target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Github</a>
                                </li>
                                <li><a href="https://www.creative-tim.com/templates/free?ref=mtk" target="_blank"
                                        rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Free
                                        Products</a></li>
                            </ul>
                        </div>
                        <div>
                            <p
                                class="antialiased font-sans text-sm leading-normal text-blue-gray-900 mb-2 block font-medium uppercase">
                                other resources</p>
                            <ul class="mt-3">
                                <li><a href="https://github.com/creativetimofficial/material-tailwind/blob/main/LICENSE.md?ref=mtk"
                                        target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">MIT
                                        License</a></li>
                                <li><a href="https://github.com/creativetimofficial/material-tailwind/blob/main/CONTRIBUTING.md?ref=mtk"
                                        target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Contribute</a>
                                </li>
                                <li><a href="https://github.com/creativetimofficial/material-tailwind/blob/main/CHANGELOG.md?ref=mtk"
                                        target="_blank" rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Change
                                        Log</a></li>
                                <li><a href="https://creative-tim.com/contact-us?ref=mtk" target="_blank"
                                        rel="noreferrer"
                                        class="antialiased font-sans text-sm leading-normal mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700">Contact
                                        Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">
                <div class="flex flex-wrap items-center justify-center md:justify-between">
                    <div class="mx-auto w-full px-4 text-center">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-500">
                            Copyright © 2023 Material Tailwind by <a href="https://www.creative-tim.com?ref=mtk"
                                target="_blank"
                                class="text-blue-gray-500 transition-colors hover:text-blue-500">Creative Tim</a>.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>