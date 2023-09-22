<div class="col-4 ">
    <div class="py-3 bg-white mx-2">
        <ul class="w-100 list-unstyled m-0" >
            <li  class="{{ $menu == 'my_resume' ? 'border-2 bg-body-secondary border-start border-danger' : '' }} py-2"><a class="fs-6 px-5 text-decoration-none text-secondary {{ $menu == 'my_resume' ? ' text-danger' : '' }} " href="{{ url('/my_resume') }}"><i class="fas fa-book pe-2"></i> My Resume</a></li>
            <li class="{{ $menu == 'new_job' ? 'border-2 bg-body-secondary border-start border-danger' : '' }} py-2"><a class="fs-6 px-5 text-decoration-none text-secondary  {{ $menu == 'new_job' ? ' text-danger' : '' }} " href="{{ url('/new_job') }}"><i class="fa-solid fa-address-card pe-2"></i>Post a new job</a></li>
            <li class="{{ $menu == 'created_job' ? 'border-2 bg-body-secondary border-start border-danger' : '' }} py-2"><a class="fs-6 px-5 text-decoration-none text-secondary {{ $menu == 'created_job' ? ' text-danger' : '' }} " href="{{ url('/created_job') }}"><i class="fa-solid fa-briefcase pe-2"></i>Created job</a></li>
            <li class="{{ $menu == 'applied_job' ? 'border-2 bg-body-secondary border-start border-danger' : '' }} py-2"><a class="fs-6 px-5 text-decoration-none text-secondary {{ $menu == 'applied_job' ? ' text-danger' : '' }}" href="{{ url('/applied_job') }}"><i class="fa-solid fa-briefcase pe-2"></i>Applied job</a></li>
        </ul>
    </div>
</div>
