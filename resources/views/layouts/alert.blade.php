@if(Session::has('success'))
<div class="fixed right-4 top-4 bg-gradient-to-r from-green-400 to-green-500 text-white p-4 text-center rounded-xl shadow-xl border border-green-300 animate-slide-in" id="myalert">
    <p class="font-semibold text-lg flex items-center gap-2">
        ✅ {{session('success')}}
    </p>
</div>

<script>
    setTimeout(() => {
        document.getElementById('myalert').style.opacity = '0';
        setTimeout(() => {
            document.getElementById('myalert').style.display = 'none';
        }, 500);
    }, 3000);
</script>

<style>
    .animate-slide-in {
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>
@endif
