<!-- partials/video_banner.php -->
<?php
/**
 * @var array $content JSON decoded section content
 * Expected keys: title, subtitle, video_url, bg_image (poster), button_text
 */
$title = $content['title'] ?? '';
$subtitle = $content['subtitle'] ?? '';
$videoUrl = $content['video_url'] ?? '';
$poster = $content['bg_image'] ?? '';
$buttonText = $content['button_text'] ?? 'Watch Video';
?>
<section class="position-relative overflow-hidden py-0" 
         x-data="{ playing: false }"
         style="min-height: 85vh; background-color: #000;">
    
    <!-- Background Video (Hidden until playing) -->
    <video x-ref="videoPlayer"
           class="position-absolute top-50 start-50 translate-middle w-100 h-100"
           style="object-fit: cover; z-index: 0; transition: opacity 1s ease-in-out;"
           :style="playing ? 'opacity: 1;' : 'opacity: 0;'"
           loop>
        <source src="<?php echo $videoUrl; ?>" type="video/mp4">
    </video>

    <!-- Poster / Overlay (Visible until playing) -->
    <div x-show="!playing" 
         x-transition:leave="transition ease-in duration-800"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="position-absolute top-0 start-0 w-100 h-100"
         style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo $poster; ?>') no-repeat center center; background-size: cover; z-index: 2;">
    </div>

    <!-- Content Overlay -->
    <div class="container position-relative h-100 d-flex flex-column align-items-center justify-content-center text-center text-white" 
         style="z-index: 3; min-height: 85vh;">
        
        <div x-show="!playing" x-transition:fade>
            <h2 class="display-3 fw-bold mb-3" style="letter-spacing: 5px;"><?php echo htmlspecialchars($title); ?></h2>
            <p class="lead fs-4 mb-5 mx-auto" style="max-width: 800px;"><?php echo htmlspecialchars($subtitle); ?></p>
            
            <button type="button" 
                    class="btn btn-outline-warning btn-lg px-5 py-3 fw-bold text-uppercase"
                    style="border-width: 2px; transition: all 0.3s;"
                    @click="playing = true; $refs.videoPlayer.play(); $refs.videoPlayer.muted = false;">
                <?php echo htmlspecialchars($buttonText); ?>
            </button>
        </div>

        <!-- Exit Button / Pause (Optional - shows when playing) -->
        <button x-show="playing" 
                @click="playing = false; $refs.videoPlayer.pause()"
                class="btn btn-sm btn-outline-light position-absolute bottom-0 mb-4 opacity-50 hover-opacity-100">
            Stop Video
        </button>
    </div>
</section>

<style>
.hover-opacity-100:hover { opacity: 1 !important; }
</style>
