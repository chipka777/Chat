<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/chat.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.1/socket.io.js"></script>
</head>
<body>
<div class="loader"></div>
<div class="container main">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Chat</div>
            <div class="panel-body">
                <div class="col-sm-3 col-xs-12">
                    <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none; overflow-y: scroll;" tabindex="5000">
                        <div class="chat-users">
                            <h6>Online</h6>
                            <!--<div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12 chat" style="overflow: hidden; outline: none; overflow-y: scroll" tabindex="5001">
                    <div class="col-inside-lg decor-default">
                        <div class="chat-body">
                            <h6>Mini Chat</h6>
                            <!--<div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name"><div class="status online">

                                    </div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> ...</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> ...</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name"><div class="status off">

                                    </div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name"><div class="status off">

                                    </div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name"><div class="status off">

                                    </div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text"> It is a long established fact that a reader will be. Thanks Mate!</div>
                                <div class="time">5 min ago</div>
                            </div>-->
                            <div class="answer-add">
                                <input class="message" placeholder="Write a message">
                                <span class="answer-btn answer-btn-1"></span>
                                <span class="answer-btn answer-btn-2 send-msg"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="login-field">
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <input class="username-login" name="user" type="text" placeholder="username">
                <button class="btn btn-info btn-block login" type="submit">Enter</button>
            </div>
        </div>
    </div>
</div>
<script>

</script>

<script src="js/chat/main.js"></script>
<script src="js/chat/handlers.js"></script>
<script src="js/chat/listeners.js"></script>
</body>
</html>

