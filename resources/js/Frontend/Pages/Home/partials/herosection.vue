<template>
    <div
        id="carouselExampleAutoplaying"
        class="carousel slide d-none d-lg-block"
        data-bs-ride="carousel"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/07/slider1_store1.jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                        Some representative placeholder content for the third
                        slide.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/07/slider2_store1.jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block text-start" style="left: 0;">
                    <h5>Third slide label</h5>
                    <p>
                        Some representative placeholder content for the third
                        slide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
