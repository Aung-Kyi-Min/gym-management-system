@extends('layouts.layout')

@section('content')

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
@endsection
  
 