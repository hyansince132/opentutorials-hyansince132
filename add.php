<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            body {
                font-size: 0.8em;
                font-family: dotum;
                line-height: 1.6em;
            }
            body.black {
                background-color: black;
                color: white;
            }
            body.black a {
                color: white;
            }
            body.black a:hover {
                color: #f60;
            }
            body.black header {
                border-bottom: 1px solid #333;
            }
            body.black nav {
                border-right: 1px solid #333;
            }
            header {
                border-bottom: 1px solid #ccc;
                padding: 20px 0;
            }
            #toolbar {
                padding: 10px;
                float: right;
            }
            nav {
                float: left;
                margin-right: 20px;
                min-height: 500px;
                border-right: 1px solid #ccc;
            }
            nav ul {
                list-style: none;
                padding-left: 0;
                padding-right: 20px;
            }
            article {
                float: left;
            }
            footer {
                clear: both;
            }
            a {
                text-decoration: none;
            }
            a:link, a:visited {
                color: #333;
            }
            a:hover {
                color: #f60;
            }
            h1 {
                font-size: 1.4em;
            }
        </style>
    </head>
    <body id="body">
        <div>
            <header>
                <h1>JavaScript</h1>
            </header>
            <div id="toolbar">
                <input type="button" value="black" onclick="document.getElementById('body').className='black'" />
                <input type="button" value="white" onclick="document.getElementById('body').className='white'" />
            </div>
            <nav>
            	<a href=.add.php>토픽추가</a>
            	
                <ul>
                    <li>
                        <a href="http://opentutorials.org/course/49/16">JavaScript</a>
                    </li>
                    <li>
                        <a href="http://opentutorials.org/course/49/17">변수와 상수</a>
                    </li>
                    <li>
                        <a href="http://opentutorials.org/course/49/18">연산자</a>
                    </li>
                    <li>
                        <a href="http://opentutorials.org/course/49/19">함수</a>
                    </li>
                    <li>
                        <a href="http://opentutorials.org/course/49/20">이벤트</a>
                    </li>
                    <li>
                        <a href="http://opentutorials.org/course/49/21">객체</a>
                    </li>
                </ul>
            </nav>
            <article>
                <form action="addd.php" method="post"
                <h1>
                	제목
                	<input type="text" name="title"
                </h1>
               
               <h2>
               	내용
               	<textarea name=description></textarea>
               </h2>
               <input type= "submit">
                    </ul>
                </div>
            </article>
        </div>
    </body>
</html>