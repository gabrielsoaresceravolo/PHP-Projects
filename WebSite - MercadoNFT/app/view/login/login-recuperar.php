<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>MercadoNFT - Recuperação</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- favicon -->
        <link rel="shortcut icon" href="../../../public/images/favicon.ico">

        <!-- Css -->
        <link href="../../../public/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="../../../public/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="../../../public/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../../public/css/style.css">
    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <section class="md:h-screen py-36 flex items-center bg-[url('../../../public/images/cta.html')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="container relative">
                <div class="flex justify-center">
                    <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                        <a href="../index.html"><img src="../../../public/images/logo-icon-64.png" class="mx-auto" alt=""></a>
                        <h5 class="my-6 text-xl font-semibold">Recuperar minha senha</h5>
                        <div class="grid grid-cols-1">
                            <p class="text-slate-400 mb-6">Porfavor informe o email cadastrado na sua conta, iremos enviar uma solicitação para você possa recupera-la </p>
                            <form class="text-start">
                                <div class="grid grid-cols-1">
                                    <div class="mb-4">
                                        <label class="font-semibold" for="LoginEmail">Endereço de Email:</label>
                                        <input id="LoginEmail" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Digite seu email">
                                    </div>

                                    <div class="mb-4">
                                        <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Recuperar">
                                    </div>

                                    <div class="text-center">
                                        <span class="text-slate-400 me-2">Lebrou sua senha ? </span><a href="login-entrar.html" class="text-black dark:text-white font-bold inline-block">Entrar na conta</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section -->

        <div class="fixed bottom-3 end-3">
            <a href="#" class="back-button size-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="size-4"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>

        <!-- JAVASCRIPTS -->
        <script src="../../../public/libs/feather-icons/feather.min.js"></script>
        <script src="../../../public/js/plugins.init.js"></script>
        <script src="../../../public/js/app.js"></script>

    </body>
</html>