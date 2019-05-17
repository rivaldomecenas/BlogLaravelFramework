<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="/pages/">{{config('app.name','LSAPP')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="/pages">Home <span class="sr-only"></span></a></li>
        <li class="nav-item"><a class="nav-link" href="/pages/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/pages/services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
    </ul>
    <ul class="nav navbar-nav navbar_right">
        <li class="nav-item"><a class="nav-link" href="/posts/create">Create Post</a></li>
    </ul>
    </div>
</nav>