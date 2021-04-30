<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head style="background-color: #121212;" itemscope itemtype="http://schema.org/WebSite">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@yield('meta')
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/js/jquery-1.12.4.min.js"></script>
</head>
<body class="font-web antialiased bg-gray-800" itemscope itemtype="http://schema.org/WebPage">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div class="container mx-auto px-4 pt-4">
            <div class="relative flex justify-between items-center">
    <div id="menus" class="w-full"><div class="relative flex items-center"><ul class="flex space-x-4 py-2 w-full"><li><a href="{{url('/')}}" class="flex font-medium text-gray-300"><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current mr-2"><path d="M30.9087 9.69876C30.4287 7.60376 29.3387 5.88276 27.9017 4.43176C24.1757 -0.211244 17.4047 -0.588244 11.9937 0.524756C10.3067 0.871756 8.67673 1.48476 7.19273 2.32976C5.87073 3.26776 4.62273 4.28676 3.42773 5.37776C3.33873 5.47776 3.24073 5.57176 3.15473 5.67476C3.16573 5.64776 3.17873 5.62176 3.18973 5.59476C2.75973 5.99276 2.33673 6.40576 1.91473 6.82076C1.76673 7.07576 1.60673 7.32476 1.43073 7.56276C0.410727 10.1898 -0.453273 13.1668 0.263727 15.9108C1.78573 21.7318 9.18773 24.8308 14.5597 25.2038C19.8557 25.5718 28.2297 25.2558 29.5497 18.7738C30.1897 15.6328 31.6597 12.9788 30.9087 9.69876ZM27.9177 17.2388C27.6537 18.3628 27.6667 19.7098 26.8187 20.6178C26.0457 21.4458 24.5267 22.1008 23.5027 22.5628C21.1907 23.6038 18.7807 23.5578 16.2987 23.5328C11.2757 23.4818 6.84773 22.0798 3.36473 18.3048C1.17073 15.9268 1.23273 13.1708 1.91673 10.1718C1.95473 10.0048 1.99373 9.83176 2.03373 9.65276C2.80373 8.30876 3.57373 6.97976 4.63173 5.79076C4.90673 5.51276 5.19373 5.24176 5.50873 4.98776C7.34673 3.50576 9.51573 2.90376 11.6047 1.95276C11.6097 1.95176 11.6147 1.94976 11.6197 1.94876C13.9437 1.45676 16.4597 1.29076 18.8317 1.47676C20.7887 1.62976 22.7317 2.49176 24.4947 3.59176C24.5357 3.68376 24.5977 3.77076 24.6897 3.84676C26.5747 5.42976 28.3197 7.38876 28.9817 9.81576C29.7457 12.6268 28.5327 14.6168 27.9177 17.2388Z"></path> <path d="M9.32774 12.2587C9.24674 11.9837 9.00574 11.8197 8.74474 11.7757C8.71174 11.7577 8.68474 11.7307 8.65074 11.7157C8.08774 11.4727 7.78774 11.9177 7.79774 12.3877C7.74074 12.6477 7.81974 12.9357 8.11674 13.1187C8.23274 13.1907 8.35974 13.2137 8.48574 13.2157C8.50974 13.2187 8.52574 13.2327 8.55074 13.2347C9.05874 13.2647 9.47174 12.7477 9.32774 12.2587Z"></path> <path d="M12.9127 11.3448C12.4317 8.93676 9.3617 8.68876 7.3997 9.09076C6.9877 9.17476 6.9027 9.52776 7.0197 9.82376C6.0967 10.1708 5.3487 10.9388 5.2117 12.0338C4.9297 14.2848 7.2037 15.6978 9.2167 15.5988C11.3677 15.4928 13.3657 13.6098 12.9127 11.3448ZM9.8177 14.3188C8.7477 14.6188 7.3667 14.3468 6.6337 13.4528C5.4077 11.9578 6.7277 10.4038 8.2657 10.1818C8.3827 10.1708 8.5037 10.1618 8.6287 10.1558C8.9537 10.1548 9.2797 10.2098 9.5857 10.3478C9.7177 10.4068 9.8277 10.2978 9.8197 10.1908C10.5537 10.2868 11.2327 10.5478 11.5707 11.1298C12.3337 12.4418 11.0427 13.9748 9.8177 14.3188Z"></path> <path d="M23.3467 10.4138C22.0597 9.24575 19.2577 8.54175 17.9887 10.0978C17.8867 10.2238 17.8797 10.4028 17.9457 10.5388C16.9067 11.4348 16.3157 13.1598 16.9847 14.2828C18.1577 16.2508 20.8827 15.6278 22.5607 14.8258C24.4647 13.9178 24.9697 11.8878 23.3467 10.4138ZM22.2827 13.5998C21.3627 14.2088 19.7657 14.7158 18.7147 14.2808C17.1497 13.6318 17.7457 11.6938 18.7317 10.6718C19.4697 10.5718 20.1837 10.3878 20.9457 10.5518C22.3577 10.8568 24.0727 12.4158 22.2827 13.5998Z"></path> <path d="M20.7567 12.0917C20.7477 12.0757 20.7397 12.0597 20.7287 12.0447C20.5757 11.8177 20.3147 11.6667 19.9897 11.7407C19.4327 11.8687 19.3447 12.5437 19.6477 12.9097C19.6517 12.9167 19.6507 12.9217 19.6557 12.9287C19.8477 13.2017 20.2467 13.2387 20.5227 13.0797C20.9167 12.8537 20.9407 12.4117 20.7567 12.0917Z"></path> <path d="M16.2257 13.5098C16.2227 13.2388 15.9957 12.9978 15.7177 13.0018C15.1107 13.0118 14.5017 13.0078 13.8957 13.0318C13.5427 13.0458 13.2737 13.0448 13.1107 13.3968C12.9087 13.8308 12.9067 14.4468 12.8457 14.9198C12.7747 15.4818 12.6797 16.0758 12.8227 16.6298C12.8477 16.7268 12.9037 16.7968 12.9737 16.8438C13.0247 17.0788 13.1737 17.3048 13.3627 17.4308C13.7817 17.7098 14.5307 17.7738 14.9857 17.5438C15.0387 17.5168 15.0877 17.4708 15.1387 17.4338C15.5267 17.3428 15.8737 17.1448 16.0047 16.7378C16.3177 15.7688 16.2387 14.5168 16.2257 13.5098Z"></path></svg>

                        Home
                    </a></li> <li class="flex items-center md:hidden cursor-pointer meni"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="mr-2 w-5 h-5 stroke-current text-gray-300"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> <span class="text-gray-300 font-medium">Menus</span></li>

                    <li class="hidden md:inline-block"><a href="{{url('/subbed-hentai')}}" class="inline-flex items-center font-medium text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg> Subbed Hentai</a></li>

                    <li class="hidden md:inline-block"><a href="{{url('/dubbed-hentai')}}" class="inline-flex items-center font-medium text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg> Dubbed Hentai</a></li>

                    </ul> 
                    <div class="absolute md:relative w-full md:w-1/4"><div class="flex justify-end items-center"><form action="{{route('posts.search')}}" method="get"><input name="name" type="text" placeholder="Search hentai..." class="searcho hidden inline-block p-2 w-full rounded border-white bg-gray-800 focus:ring-0 focus:border-green-500 text-white text-sm"></form><div class="absolute p-2 bg-gray-800 rounded-tr rounded-br cursor-pointer select-none seat" style="margin-right: 1px;"><div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></div></div></div> <!----></div>
</div>

                     <ul class="grid grid-cols-2 sm:grid-cols-3 gap-x-2 gap-y-2 mt-4 menuo hidden">

                        <li class="flex items-center md:hidden"><a href="{{url('/subbed-hentai')}}" class="inline-flex items-center font-medium text-gray-300 p-2 rounded bg-gray-700 text-sm w-full"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>

                    Subbed Hentai
                </a></li>

                <li class="flex items-center md:hidden"><a href="{{url('/dubbed-hentai')}}" class="inline-flex items-center font-medium text-gray-300 p-2 rounded bg-gray-700 text-sm w-full"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>

                    Dubbed Hentai
                </a></li>
            </ul></div>
</div>



            
            <div class="flex items-center mt-4 px-3 py-2 bg-gray-900 rounded">
            <svg class="w-4 h-4 mr-2 stroke-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
        </svg>

        <p class="w-full text-xs md:text-sm leading-loose text-white">
            welcome to damn.stream here you can watch hentai or use our hentai videos on your website.
        </p>
    </div>
                    </div>
@yield('content')
<script src="/js/script.js"></script>
<footer class="container mx-auto p-4">
            <p class="text-center text-gray-500 text-sm">
                On <a href="{{url('/')}}">Damn.Stream</a> you can watch hentai online english subbed in high quality
            </p>

            <div class="flex flex-col items-center">
                <p class="mt-4 text-xs text-gray-600 leading-loose text-center w-full md:w-2/3">
                    Copyrights and Trademarks for Hentai, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law. This site does not store any files on its server. All contents are provided by non-affiliated third parties.
                </p>

                <ul class="flex justify-center space-x-4 mt-4">
                    <li>
                        <a href="{{url('/dmca')}}" class="text-gray-500 text-sm">
                            DMCA
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/privacy-policy')}}" class="text-gray-500 text-sm">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
</body>
</html>