@extends("layouts.guest")

@section("title")
  Home
@endsection


@section("content")

<div class="d-flex jumbotron">

  <div class="box-bio relative">
    <h6 class="subtitle">hello, i'm</h6>
    <h6 class="title">Mirko Di Franco</h6>
    <h6>Junior Full Stack Developer</h6>

    <div class="icons d-flex ">
      <div class="circle text-center">
        <a href="https://github.com/mirkettinho" target="blank"><i class="fa-brands fa-github-alt"></i></a>
      </div>

      <div class="circle text-center">
        <a href="https://github.com/mirkettinho"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>

      <div class="circle text-center">
        <a href="https://github.com/mirkettinho"><i class="fa-solid fa-envelope"></i></a>
      </div>

      <div class="circle text-center">
        <a href="https://github.com/mirkettinho"><i class="fa-brands fa-twitter"></i></a>
      </div>

    </div>

    <div class="card-home-public">
      <div class="header-card-home-public">My Skills</div>
      <div class="body">

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">HTML</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 1%"></div>
          </div>
          <div class="skill-percent-number">1%</div>
        </div>

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">CSS</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 2%"></div>
          </div>
          <div class="skill-percent-number">2%</div>
        </div>

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">JavaScript</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 3%"></div>
          </div>
          <div class="skill-percent-number">3%</div>
        </div>

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">///</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 4%"></div>
          </div>
          <div class="skill-percent-number">4%</div>
        </div>

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">///</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 5%"></div>
          </div>
          <div class="skill-percent-number">5%</div>
        </div>

        <div class="d-flex align-items-center mb-2">
          <div class="skill-name">///</div>
          <div class="skill-level">
            <div class="skill-percent" style="width: 6%"></div>
          </div>
          <div class="skill-percent-number">6%</div>
        </div>

      </div>
    </div>

  </div>

  <div class="box-image">
    <img src="img/jumbotron.png" alt="">
  </div>

</div>



@endsection
