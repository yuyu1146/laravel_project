<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>첫화면</title>
</head>
<body>
    <p>안녕하세요! 
    @if (Auth::check())
    {{ \Auth::user()->name }}님</p>
    <p><a href="/logout">로그아웃</a></p>

    <!-- 보안상 post로 요청해야하는 경우 -->
    <!-- <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    <p>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); logout();">
            로그아웃
        </a>
    </p>

    <script>
        function logout() {
            fetch('{{ route('logout') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    window.location.reload();
                } else {
                    console.error('로그아웃 실패:', response);
                }
            }).catch(error => console.error('로그아웃 에러:', error));
        }
    </script> -->

    @else
    게스트님</p>
    <p><a href="/login">로그인</a><br><a href="/register">회원 등록</a></p>
    @endif
</body>
</html>