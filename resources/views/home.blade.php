<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Chat App Using Laravel Socket IO</title>
  </head>
  <body>
    <div class="container">
        <p>{{ auth()->user()->name }}</p>
        <div class="card">
            <div class="card-header">
                <select class="custom-select" name="user_id" id="select_user">
                    <option value=0>Select User</option>
                    @foreach(\App\Models\User::all() as $user)
                        @if(auth()->id() !== $user->id)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="card-body chat-box">
                <ul>

                </ul>
            </div>
            <div class="card-footer" style="display:flex;">
                <input type="text" class="form-control mr-2" name="chatInput" id="chatInput" contenteditable="">
                <button class="btn btn-dark" onclick="sendMessage();">Send</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.1.2/socket.io.min.js" integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        let ip_address = 'localhost';
        let socket_port = '3000';
        let socket = io(ip_address + ':' + socket_port);
        function sendMessage(){
            let chatInput = $('#chatInput');
            let idInput = $('#select_user');
            let message = chatInput.val();
            let id = idInput.val();
            if(id !== "0"){
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
            $('.chat-box ul').append(`<li>${message} by ${name}</li>`)
        }
    </script>
  </body>
</html>