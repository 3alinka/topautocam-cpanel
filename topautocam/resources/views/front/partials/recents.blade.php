<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading">
                <div>
                    <h4 class="title uk-h2 title-font" style="padding-top: 5px;">
                        {{ __("Recent") }}
                    </h4>
                </div>
                <div>
                    <a href="page-category.html" class="more-link">{{ __("See all in recent")}}</a>
                </div>
            </div>

            <div class="block-layout grid-layout four-cols">
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid="">

                    @foreach($recents as $recent)
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src={{ asset('storage/'.$recent->image) }} data-uk-img="" title="Post Title"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            <div class="entry-inner">
                                <div class="entry-content">
                                    <h3 class="uk-text-small khmer-title-font">
                                        <a href="single.html">{{ $recent->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </article> 
                    @endforeach
                
                </div>
            </div>
            <!-- End Layout -->

        </div>
    </div>
</div>