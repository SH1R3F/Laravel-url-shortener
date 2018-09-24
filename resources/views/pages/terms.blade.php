@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <!-- Start  breadcrumb -->
    <nav aria-label="breadcrumb" class="breadcrumbContainer">
      <ol class="breadcrumb container">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">terms and conditions</li>
      </ol>
    </nav><!-- End  breadcrumb -->

    <!-- Start privacy and policy -->
    <section class="privacyAndPolicy">
    <div class="container">
    	<h2 class="h1">privacy &amp; policy</h2>

    	<p>
    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel luctus lectus, at porttitor orci. Nulla ac ex quis leo efficitur ornare sed quis ex. Etiam vitae odio interdum, placerat nisi ut, lobortis ligula. Duis sed massa porttitor, vehicula ante non, pharetra ipsum. Nulla facilisi. In id augue orci. Duis nec erat sit amet justo imperdiet dignissim sit amet at diam. Nunc venenatis tortor a mattis porta. Sed ac metus velit. Nam pharetra iaculis elit a vehicula. Aenean elit justo, accumsan eu risus vitae, aliquet vehicula massa. Maecenas orci nunc, egestas ultricies convallis vel, varius eget eros. Aenean commodo nunc eget mauris varius rutrum. Nunc hendrerit aliquam elementum. Nullam in nisl ante.
    		<br>
    		Curabitur vitae suscipit nisi, et iaculis erat. Cras eu massa molestie, malesuada nulla vel, rutrum metus. Pellentesque pellentesque libero eu dui pulvinar tristique. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce leo nunc, semper in aliquam a, blandit vel ante. Suspendisse faucibus, lacus id faucibus sollicitudin, risus felis facilisis tellus, vel euismod eros enim quis orci. Integer mattis, sem sed vestibulum condimentum, quam massa tempus mauris, sit amet placerat purus lacus eu tellus. Pellentesque varius in ex ut laoreet. Fusce pretium nulla eu aliquam dapibus. Praesent a metus vel nibh iaculis semper. Donec congue nibh mollis velit vehicula aliquam. Fusce pellentesque leo sed lacus maximus facilisis. Mauris vestibulum nisl sit amet nisi viverra, fermentum accumsan quam varius. Donec in gravida elit. Integer ultrices turpis sed tortor laoreet, ut fermentum massa facilisis. Sed ut magna dignissim ex tempus pulvinar eu sit amet libero.
    		<br>
    		Nunc semper viverra sollicitudin. Aenean eu velit imperdiet, tincidunt lectus nec, vestibulum tortor. Donec feugiat elit vitae magna blandit convallis. Integer quis aliquam nunc. In scelerisque aliquet enim. Donec ac tortor id dui varius lobortis. Suspendisse rutrum felis sapien, ac molestie mauris consequat et.
    		<br>
    		Sed vitae dapibus massa. Morbi lacus ex, posuere sit amet erat vel, tincidunt blandit mi. Donec maximus ornare rhoncus. Nulla facilisi. Duis diam tortor, volutpat ac urna vitae, ullamcorper fringilla sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus ut ipsum pharetra, dictum mauris in, sodales nunc. Aenean tincidunt rutrum libero, et elementum eros semper quis. Cras maximus tincidunt urna, sed ultricies elit. Duis consequat sodales nisl, at luctus quam varius porttitor. Sed ac felis vitae velit tincidunt pretium in at mauris. Etiam efficitur lacus ac semper posuere. Phasellus quam lacus, semper ut enim a, interdum facilisis libero. Ut quis feugiat ex, ut ultrices erat.
    		<br>
    		Nam elementum ipsum at tortor cursus lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam feugiat rhoncus lorem, id vulputate libero malesuada eget. Proin in tristique sem. Duis elementum sem at posuere molestie. Praesent velit nulla, volutpat sit amet euismod id, congue in orci. In hac habitasse platea dictumst. Nulla mollis non risus sit amet euismod. Praesent malesuada lectus in tellus bibendum sagittis. Proin lectus ligula, dictum in ante in, scelerisque iaculis odio.
    	</p>
    </div>
    </section><!-- End privacy and policy -->
@endsection
