<script src="{!! asset('js/app.js')!!}"></script>
<script src="{!! asset('js/node_modules.js')!!}"></script>
<script src="{!! asset('js/implement.js')!!}"></script>
<script src="{!! asset('js/cybertron.js')!!}"></script>
<script>
    $(document).ready(function() {
        Unify.init()
        $.backstretch([
            "assets/img/bg/19.jpg",
            "assets/img/bg/18.jpg",
        ], {
            fade: 1000,
            duration: 7000
        })
    })
</script>