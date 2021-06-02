<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('main'); ?>
    <!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-4 text-dark text-capitalize">Contact Us</h2>
          </div>
        </div>
        <div class="col-12">
          <ol
            class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-section end -->
  <!-- map start -->
  <div class="map">
    
    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    src="https://maps.google.com/maps?height=600&amp;hl=en&amp;q=Học Viện Công nghệ Bưu Chính Viễn Thông Hà Nội&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
    </iframe>
  </div>
  <!-- map end -->
  <!-- contact-section satrt -->
  <section class="contact-section pt-80 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mb-30">
          <!--  contact page side content  -->
          <div class="contact-page-side-content">
            <h3 class="contact-page-title">Contact Us</h3>
            <p class="contact-page-message mb-30">
              Claritas est etiam processus dynamicus, qui sequitur mutationem
              consuetudium lectorum. Mirum est notare quam littera gothica, quam
              nunc putamus parum claram anteposuerit litterarum formas human.
            </p>
            <!--  single contact block  -->

            <div class="single-contact-block">
              <h4><i class="fa fa-fax"></i> Address</h4>
              <p>123 Main Street, Anytown, CA 12345 – USA</p>
            </div>

            <!--  End of single contact block -->

            <!--  single contact block -->

            <div class="single-contact-block">
              <h4><i class="fa fa-phone"></i> Phone</h4>
              <p>
                <a href="tel:123456789">Mobile: (08) 123 456 789</a>
              </p>
              <p><a href="tel:1009678456">Hotline: 1009 678 456</a></p>
            </div>

            <!-- End of single contact block -->

            <!--  single contact block -->

            <div class="single-contact-block">
              <h4><i class="fas fa-envelope"></i> Email</h4>
              <p>
                <a href="mailto:yourmail@domain.com">yourmail@domain.com</a>
              </p>
              <p>
                <a href="mailto:support@hastech.company"
                  >support@hastech.company</a
                >
              </p>
            </div>

            <!--=======  End of single contact block  =======-->
          </div>

          <!--=======  End of contact page side content  =======-->
        </div>
        <div class="col-lg-6 col-12 mb-30">
          <!--  contact form content -->
          <div class="contact-form-content">
            <h3 class="contact-page-title">Tell Us Your Message</h3>
            <div class="contact-form">
              <form
                id="contact-form"
                action="https://htmlmail.hasthemes.com/saidul/looki/contact.php"
                method="POST"
              >
                <div class="form-group">
                  <label>Your Name <span class="required">*</span></label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="form-group">
                  <label>Your Email <span class="required">*</span></label>
                  <input type="email" name="email" id="email" />
                </div>
                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" name="subject" id="subject" />
                </div>
                <div class="form-group">
                  <label>Your Message</label>
                  <textarea
                    name="contactMessage"
                    class="pb-10"
                    id="contactMessage"
                  ></textarea>
                </div>
                <div class="form-group mb-0">
                  <button
                    type="submit"
                    value="submit"
                    id="submit"
                    class="btn btn-dark btn--lg"
                    name="submit"
                  >
                    submit
                  </button>
                </div>
              </form>
            </div>
            <p class="form-message mt-10"></p>
          </div>
          <!-- End of contact -->
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\bkap\looki\resources\views/front-end/page/contact.blade.php ENDPATH**/ ?>