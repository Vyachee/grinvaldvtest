<?php

    

    include 'media/php/db.php';



    $data = $_POST;

    if(!empty($data)) {



        $new = R::dispense('guests');

        $new->email = $data['email'];

        $new->author = $data['author'];

        $new->text = $data['text'];

        R::store($new);



    }

    

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Работа с Git</title>

    <link rel="stylesheet" href="media/css/fonts.css">

    <link rel="stylesheet" href="media/css/main.css">

    <link rel="stylesheet" href="media/css/fa.css">

    <link rel="stylesheet" href="media/map/map.css">

    <link rel="stylesheet" href="media/css/callback.css">

    <link rel="stylesheet" href="css.css">

    <link rel="shortcut icon" href="favicon.ico">
    
<!--Start ChangeAgain experiments code for grinvaldvtest.000webhostapp.com -->
<script>
  (function(w,d,s,o){
    w[o.callback] = function(){var a = d.getElementById('_cahiddenstyle'); if (a)a.parentNode.removeChild(a);}
    setTimeout(function(){w[o.callback]()}, o.timeout);
    var hs = d.createElement('style'),hc = "body{visibility:hidden !important;opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}", h = d.getElementsByTagName('script')[0],
    f = 'https://changeagain.me/sites/232254473.js?screen_width=' + s.width + '&screen_height=' + s.height + '&page=' + encodeURIComponent(d.URL), r = d.createElement('script');
    hs.setAttribute('id', '_cahiddenstyle'); hs.setAttribute('type', 'text/css');
    if (hs.styleSheet)hs.styleSheet.cssText = hc; else hs.appendChild(d.createTextNode(hc)); h.parentNode.insertBefore(hs,h);
    r.setAttribute("type","text/javascript"); r.setAttribute("src", f); r.onerror=function(){w[o.callback]()}; h.parentNode.insertBefore(r,h);
  })(window, document, screen, {timeout: 1500, callback: '_changeagain_finish'});
</script>
<!-- End ChangeAgain experiments code  for grinvaldvtest.000webhostapp.com -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166285363-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166285363-1');
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(62057803, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/62057803" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <style>

    

        .preloader {

            width: 100vw;

            height: 100vh;

            position: fixed;

            left: 0;

            top: 0;

            background-color: #3545db;

            z-index: 3;

            display: flex;

            justify-content: center;

            align-items: center

        }



        .circle {

            width: 75px;

            height: 75px;

            border-radius: 50%;

            background-color: lightgray;

            animation: 1.75s infinite ease-in-out preloader;

        }

        .b_test {
            width: 100%;
        }

        .b_test img {
            width: 100%;
            object-fit: cover;
        }



        @keyframes preloader {

            0% {

                transform: scale(0.5)

            }

            50% {

                transform: scale(1.3);

                background-color: #fff

            }

            100% {

                transform: scale(0.5)

            }

        }

</style>

</head>

<body>



<div class="popup-container">

    <div class="popup">

        <h2>Обратная связь</h2>

        <span class="closePop">Закрыть</span>

        <form id="callbackForm" action="index.php" method="POST">

            <input type="text" id="iAuthor" placeholder="Имя автора" name="author">

            <input type="email" id="iEmail" placeholder="EMail" name="email">

            <textarea name="text" id="iText" placeholder="Текст сообщения"></textarea>

            <input type="submit" value="Отправить" id="sendCallback">

        </form>

    </div>

</div>



<!--     <div id="pushNotification">

        <p>Привет, это какое-то уведомление, для проверки Move.JS (кликните, чтобы удалить)</p>

    </div> -->



    <div class="preloader">

        <div class="circle"></div>

    </div>

<div class="scrollWrap">

    <header>

        <div class="nav">

            <a href="#" class="logo"><img src="media/img/logo.png" alt="EasyGit"></a>

            <a href="#" class="navItem changeTheme">Темная тема</a>

            <a href="#" class="navItem callback">Обратная связь</a>

            <a href="news" class="navItem news">Новости</a>

            <a href="list.php" class="navItem">Гостевая книга</a>

        </div>

    </header>

    <nav>

        <div class="toOpen">

            <i class="fas fa-bars"></i> Меню

        </div>

        <div class="navContent">

            <a href="#" class="changeTheme">Темная тема</a>

            <a href="#" class="callback">Обратная связь</a>

            <a href="list.php">Гостевая книга</a>

        </div>

    </nav>

    <div class="articleHeader">

        <img src="media/img/bg1.png" class="articleBg" alt="git">

        <div class="flexCenter absolute">

            <p class="articleTitle">Работа с Git</p>

        </div>

    </div>



    <div class="flexWrap">

        <aside>

            <div class="asideInner">

                <div class="menu">

                    <p>Содержание</p>

                    <a href="#what_is_git">Что такое Git?</a>

                    <a href="#github_register">Регистрация на GitHub</a>

                    <a href="#how_to_install">Как установить?</a>

                    <a href="#settings_bash">Настройка Git Bash</a>

                    <a href="#begin_work">Начало работы</a>

                    <a href="#adding_ssh_key" class="under">Добавление ключа SSH</a>

                    <a href="#create_repository" class="under">Создание репозитория</a>

                    <a href="#commit_to_gh" class="under">Коммит в GitHub</a>

                    <a href="#some_commands">Дополнительные команды</a>

                    <a href="#history" class="under">История коммитов</a>

                    <a href="#ill_be_back" class="under">Вернуться к ранним версиям</a>

                </div>

            </div>

        </aside>

    

        <article>

            <div class="articleInner">

                <div class="b_test">
                    <a href="index.php">
                        <img src="media/img/banner.gif" alt="">
                    </a>
                </div>


                <h1 id="basics_of_git">Основы работы с Git.</h1>


                <div class="container" style="border-bottom: 1px solid lightgray; height: 400px;">
		<div class="g-slider">
			<div class="col-left">
				<div class="g-slider-title">
					G-Slider
				</div>
				<div class="g-slider-list">
					<ul>
						<li class="g-list-item-active">Деревья GIT</li>
						<li>Настройка Git-сервера на Linux</li>
						<li>Git и GitHub</li>
					</ul>
				</div>
			</div>
			<div class="col-right">
				<div class="g-slides">
					<div class="g-all-slides">
						<div class="g-slide">
							<img src="1.jpg">
						</div>
						<div class="g-slide">
							<img src="2.jpg">
						</div>
						<div class="g-slide">
							<img src="3.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
                <hr>





                <h2 id="what_is_git">Что такое Git?</h2>



                <p>Git - система управления версиями. Предположим, Вы разрабатываете мобильную игру. В первой версии в ней можно только ходить и прыгать. Во второй - собирать и строить что-то. В третьей - появился магазин. Вот вы разрабатываете игру уже неделю и Вы решили, что последние несколько версий (обновлений) не нужны в ней. Как Вы вернетесь на тот этап, с которого вы начали делать ненужные обновления? Git с этим поможет. Вы можете легким движением руки вернуться на тот этап, если будете использовать Git.</p>



                <h2 id="github_register">Регистрация на GitHub</h2>





                <p>Самый популярный веб-сервис для хостинга IT-проектов, основанный на системе Git. Для начала работы нужно пройти стандартную регистрацию на нём. Пройти её можно на главной странице <a href="https://github.com" target="_blank">github.com</a></p>

                <img src="media/img/01.png" alt="регистраци на github">



                <h2 id="how_to_install">Как установить?</h2>





                <p>Для установки на Windows (64-bit) достаточно скачать установщик Git по ссылке и сделать всё по инструкции:</p>

                <div class="code"><a href="https://github.com/git-for-windows/git/releases/download/v2.23.0.windows.1/Git-2.23.0-64-bit.exe">https://github.com/git-for-windows/git/releases/download/v2.23.0.windows.1/Git-2.23.0-64-bit.exe</a></div>

                <p>Для 32-bit: </p>

                <div class="code"><a href="https://github.com/git-for-windows/git/releases/download/v2.23.0.windows.1/Git-2.23.0-32-bit.exe">https://github.com/git-for-windows/git/releases/download/v2.23.0.windows.1/Git-2.23.0-32-bit.exe</a></div>

                <p>Выбрать данные параметры:</p>

                <img src="media/img/1.jpg" alt="1">

                <p>В следующих этапах оставить все параметры стандартными, поздравляю, установка Git завершена.</p>



                <h2 id="settings_bash">Настройка Git Bash</h2>





                <p>Для начала работы нужно настроить Git Bash. Запустите Git Bash и введите следующие команды:</p>

                <img src="media/img/bash_window.jpg" alt="окно git bash">

                <p>Установить имя пользователя</p>

                <div class="bash_code">git config --global user.name "Ваше_имя"</div>

                <p>И EMail (который Вы указывали на GitHub)</p>

                <div class="bash_code">git config --global user.email example@gmail.com</div>

                <p>Сгенерируйте ключ доступа SSH:</p>

                <div class="bash_code">ssh-keygen -t rsa -b 4096 -C "ваш_адрес_электронной_почты"</div>

                <p>Это выведет данные сообщения</p>

                <div class="bash_code">Generating public/private rsa key pair.</div>

                <div class="bash_code">Enter file in which to save the key (/c/Users/Donald/.ssh/id_rsa):</div>

                <p>Нажмите Enter. Далее будет данное сообщение, тут нужно ввести какую-либо кодовою фразу (при вводе в Bash, она отоброжаться не будет):</p>

                <div class="bash_code">Enter passphrase (empty for no passphrase):</div>

                <p>Затем нужно ввести ту же фразу снова</p>

                <div class="bash_code">Enter same passphrase again:</div>

                <p>Ключ доступа SSH потребуется в следующем разделе.</p>



                <h2 id="begin_work">Начало работы</h2>



                <h3 id="adding_ssh_key">Добавление ключа SSH</h3>





                <p>После регистрации на GitHub необходимо пройти в настройки:</p>

                <img src="media/img/git_settings.png" alt="настройки github">

                <p>Далее в SSH and GPG keys:</p>

                <img src="media/img/ssh_keys.png" alt="ssh ключи github">

                <p>Нажать на кнопку "New SSH key":</p>

                <img src="media/img/add_ssh.png" alt="добавить ssh ключи в github">

                <p>Вы попадете на эту страницу:</p>

                <img src="media/img/adding_ssh.png" alt="добавление ключа ssh">

                <p>Ключ, который Вы генерировали ранее, находится по адресу: "C:\Пользователи\ИмяПользователя". Файл называется "key.pub". Всё его содержимое нужно скопировать и вставить в поле "Key" на GitHub, далее нажать на кнопку "Add SSH key". В поле "Title" ввести произвольное название.</p>



                <h3 id="create_repository">Создание репозитория</h3>

                <p>На главной странице <a href="https://github.com">GitHub.com</a> нажмите кнопку "New":</p>

                <img src="media/img/new_repository.png" alt="новый репозиторий">



                <p>Вы попадете на данную страницу</p>

                <img src="media/img/creating_repository.png" alt="создание репозитория">

                <p>"Repository name" - может быть любое произвольное название репозитория</p>

                <p>"Description" - описание репозитория (необязательно)</p>

                <p>Public\Private - Публичный\Приватный тип репозитория. Публичный доступен всем в интернете, приватный только тем пользователям, которым Вы дали доступ.</p>

                <p>"Initialize this repository with a README" - описание репозитория, которое будет отображаться при входе на его страницу, под файлами.</p>



                <p>Нажимаем кнопку "Create repository", поздравляю, первый репозиторий готов!</p>



                <h3 id="commit_to_gh">Коммит в GitHub</h3>

                <p>Коммит - это запись последних изменений.</p>



                <p>Создайте на диске папку с произвольным именем и перейдите в неё в Git Bash при помощи команды:</p>

                <div class="bash_code">cd "путь до папки"</div>

                <p>Инициализируем папку, как Git репозиторий:</p>

                <div class="bash_code">git init</div>

                <p>Создайте файл README.md, введя данную команду:</p>

                <div class="bash_code">echo "Hello world!" >> README.md</div>

                <p>Для создания локального коммита, нужно, чтобы в этом коммите что-то содержалось. Добавим в него все файлы, которые мы создали, при помощи команды:</p>

                <div class="bash_code">git add .</div>

                <p>Проверим, что добавилось в него:</p>

                <div class="bash_code">git status</div>

                <img src="media/img/start_commit.jpg" alt="добавление файлов и проверка статуса коммита">

                <p>Добавим коммит командой:</p>

                <div class="bash_code">git commit -m "мой первый коммит"</div>

                <p>Далее подключимся к GitHub. Для этого получим ссылку на наш репозиторий. Для этого перейдем во вкладку "My repositories", перейдем в созданный нами репозиторий. Ссылку на репозиторий можно получить 2 способами:</p>

                <img src="media/img/var1.png" alt="1 вариант">

                <p>или</p>

                <img src="media/img/var2.png" alt="2 вариант">

                <p>Вернемся в Git Bash и введем данную команду:</p>

                <div class="bash_code">git remote add origin &lt;ссылка на репозиторий&gt;</div>

                <p>Отправим наш коммит на GitHub.</p>

                <div class="bash_code">git push -u origin master</div>

                <p>Ваш первый коммит на GitHub готов, поздравляю.</p>





                <h2 id="some_commands">Дополнительные команды для Git</h2>



                <h3 id="history">История коммитов</h3>





                <p>Для того, чтобы посмотреть историю коммитов, достаточно ввести команду</p>

                <div class="bash_code">git log</div>

                <p>Результатом будет список ваших коммитов в формате:</p>

                <div class="code">

                    <span style="color: yellow;">commit 88bc8fac1a086c93dbf82c2561dc71d46673df1b </span>

                    <br>

                    <span>Author: Vyacheslav &lt;myEmail@gmail.com&gt;</span>

                    <br>

                    <span>Date:   Sun Sep 22 15:46:11 2019 +0500</span>

                    <br>

                    <span>some commit comment</span>

                </div>

                <p>После "Commit:" идет полный идентификатор коммита</p>



                <h3 id="ill_be_back">Вернуться к ранним версиям</h3>

                

                <p>Для того, чтобы переключиться на более ранний коммит и продолжить работу с него, нужно создать новую ветку.</p>

                <div class="bash_code">git checkout -b имя_новой_ветки первые_7_символов_id_коммита</div>

                <p>Имя ветки может быть любым, но без пробелов.</p>

            </div>



<div id="imap">

  <a href="#" id="klgd">Калининград</a>

  <a href="#" id="spb">Санкт-Петербург</a>

  <a href="#" id="msk">Москва</a>

  <a href="#" id="chel">Челябинск</a>

</div>

<div id="mcontainer"></div>

            <footer>

                <div class="column">

                    <div>

                        <p>Разработал Гринвальд Вячеслав, ИС-233</p>

                    </div>

                </div>

                <div class="column">

                    <div>

                        <a href="https://vk.com/gora_pl" target="_blank"><i class="fab fa-vk"></i></a>

                        <a href="https://github.com/Vyachee" target="_blank"><i class="fab fa-github"></i></a>

                    </div>

                </div>

                <div class="column">

                    <a href="https://radiotech.su" target="_blank"><img src="media/img/chrt_logo.png" alt="логотип чрт"></a>

                </div>

            </footer>

        </article>

    </div>

</div>







    <script src="media/js/jq.js"></script>

    <script src="media/js/fa.js"></script>

    <script src="media/js/preloader.js"></script>

    <script src="media/js/move.min.js"></script>

    <script src="media/js/js.js"></script>

    <script src="media/map/map.js"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="media/js/callback.js"></script>

    <script src="slider.js"></script>

</body>

</html>