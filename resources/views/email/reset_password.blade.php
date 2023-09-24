<h3>Gavia Panel Şifre Yenileme</h3>
<p> Sayın {{$name}}, {{$email}} hesabının şifresini yenilemek için butona tıklayın.</p><br>
<a href="{{route('admin.resetPassword',$email)}}">
    <button style="padding-x:5px; padding-y:3px;color:white; background-color:green">ŞİFREMİ YENİLE</button>
</a>