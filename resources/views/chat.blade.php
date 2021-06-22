<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="NewFile1.css" />
    </head>
    <body style="background: #f2f5fa;">
        <section class="menu-bar-outer">
            <div class="logo-sec-menu">
                <div class="row">
                    <div class="col-lg-4">
                        <figure>
                            <a href="#"><img src="img/logo-left.png" /></a>
                        </figure>
                    </div>
                    <div class="col-lg-8">
                        <figure>
                            <a href="#"><img src="img/logo-right.png" /></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="nav-menu">
                <ul class="p-0 m-0">
                    <li>
                        <a href="#">
                            <span><img src="img/m1.png" /></span> Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="active">
                            <span><img src="img/m2.png" /></span> Deliveries
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m3.png" /></span> Calendar
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m4.png" /></span> Trucks
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m5.png" /></span> Map
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m6.png" /></span> Profiles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m7.png" /></span> Finance
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m8.png" /></span> Messages
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><img src="img/m9.png" /></span> Settings
                        </a>
                    </li>
                </ul>
                <div class="add-on text-center">
                    <a href="#"><i class="fa fa-plus"></i></a>
                </div>
                <div class="menu-collapse">
                    <a href="#"><img src="img/menu-collapse.png" /></a>
                </div>
            </div>
        </section>

        <section class="right-panel">
            <div class="container-fluid p-0">
                <div class="right-part-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="header-search-form">
                                <input type="search" class="form-control" placeholder="Search..." />
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="notification">
                                <a href="#"><img src="img/bell.png" /></a> <a href="#"><img src="img/ei.png" /></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="boadr-full bg-white border">
                            <div class="brd-hdr d-flex justify-content-between">
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle border text-primary" data-toggle="dropdown" aria-expanded="false">
                                        Activate Deliveries
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </div>
                                <button type="button" class="btn border text-primary"><img src="img/NotePencil.png" /></button>
                            </div>
                            <input type="hidden" value="0" id="select_user">
                            <div class="board-body overflow-auto">
                                @foreach(\App\Models\User::all() as $user)
                                    @if(auth()->id() !== $user->id)
                                        <div class="task-mainbox for-message-left" id="doActive{{$user->id}}" style="cursor:pointer;" onclick="putID(`{{$user->id}}`)">
                                            <div class="rt-trck-box bg-transparent">
                                                <div class="trck-info-thmb w-100">
                                                    <div class="trck-crew m-0">
                                                        <ul class="mr-2">
                                                            <li><img src="img/user-icon.png" alt="" /></li>
                                                        </ul>
                                                    </div>
                                                    <h5>{{$user->name}} <small>Crafter High-ceil</small></h5>
                                                </div>

                                                <div class="star-with-text d-flex">
                                                    <span>4</span>
                                                    <span><img src="img/star-ic.png" /></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="boadr-full bg-white for-msr-right-part">
                            <div class="brd-hdr d-flex justify-content-between align-items-center">
                                <div class="trck-info-thmb">
                                    <div class="trck-crew m-0">
                                        <ul class="mr-2">
                                            <li><img src="img/user-icon.png" alt="" /></li>
                                        </ul>
                                    </div>
                                    <h5>Maria Symbol</h5>
                                </div>
                                <div class="mid-btn">
                                    <a href="#">
                                        <span><img src="img/chair-icon.png" /></span> MHD-3838 <i class="fa fa-info-circle"></i>
                                    </a>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn border mr-2"><img src="img/search-icon.png" /></button>
                                    <button type="button" class="btn border mr-2"><img src="img/star-ic.png" /></button>
                                    <button type="button" class="btn border"><img src="img/dots-icon.png" /></button>
                                </div>
                            </div>

                            <div class="board-body">
                                <div class="chat-body"></div>

                                <div class="warning-bottom-sec text-center">
                                    <span>The driver just initiated a status of risk of running late</span>
                                    <a href="#" class="btn"><img src="img/octagon.png" /> Apply status to order</a>
                                </div>

                                <div class="write-msg-here d-flex align-items-center">
                                    <div class="smile-attach mr-2">
                                        <span><img src="img/c1.png" /></span>
                                        <span><img src="img/c2.png" /></span>
                                        <span><img src="img/c3.png" /></span>
                                    </div>
                                    <div class="type-msg d-flex">
                                        <input type="text" id="chatInput" placeholder="Write your message and hit send" class="form-control" />
                                        <button type="submit" class="btn"><img src="img/send-icon.png"  onclick="sendMessage();" /></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.1.2/socket.io.min.js" integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        function putID(id){
            console.log(id);
            $(`#doActive${id}`).addClass("active");
            $('#select_user').val(id);
        }
        let ip_address = 'localhost';
        let socket_port = '3000';
        let socket = io(ip_address + ':' + socket_port);
        function sendMessage(){
            let chatInput = $('#chatInput');
            let idInput = $('#select_user');
            let message = chatInput.val();
            let id = idInput.val();
            if(id != "0"){
                console.log('message : ',message);
                console.log('id : ',id);
                socket.emit('sendChatToServer', message, id, "{{auth()->user()->name}}");
                chatInput.val('');
                return false;
            }else{
                alert('please select the user to send')
            }
        }
        socket.on('sendChatToClient', (message, id, name) => {
            if("{{ auth()->id() }}" == id){
                recieveMessage(message, id, name)
            }
        });
        function recieveMessage(message, id, name){
            console.log('message : ',message);
            let el = `<div class='single-msg d-flex'>
                        <span><img src='img/user-icon.png' /></span>
                        <div class='text-part-wrap'>
                            <figcaption><b class='warning'>${name}</b> ${message}</figcaption>
                            <small><img src='img/Clock.png' /> 14.30</small>
                        </div>
                    </div>`;
            $('.chat-body').append(el)
        }
    </script>
</html>