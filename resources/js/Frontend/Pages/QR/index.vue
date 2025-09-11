<template>
    <div class="scan-qr-section">
        <div
            class="row justify-content-center text-center mx-0 align-items-center"
            style="height: 100vh"
        >
            <div class="col-md-4">
                <div class="qr-container">
                    <h2 class="secondary-font pb-4 fw-bold">QR Code Scanner</h2>
                    <div id="qr-reader" class="border-0"></div>
                    <Link :href="route('index')">
                        <button
                            class="qr-btn back-btn-qr border-0 px-4 py-2 rounded-pill"
                        >
                            Back
                        </button>
                    </Link>

                    <!-- <div class="result">
                        Result: {{ result || "Waiting for QR scan..." }}
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, onBeforeUnmount, ref } from "vue";
import { Html5QrcodeScanner } from "html5-qrcode";
import { Link } from "@inertiajs/inertia-vue3";

const result = ref("");
let scanner = null;

function isValidUrl(text) {
    try {
        const url = new URL(text);
        return url.protocol === "http:" || url.protocol === "https:";
    } catch {
        return false;
    }
}

onMounted(() => {
    scanner = new Html5QrcodeScanner(
        "qr-reader",
        { fps: 10, qrbox: 250 },
        false
    );

    scanner.render(
        (decodedText, decodedResult) => {
            result.value = decodedText;

            if (isValidUrl(decodedText)) {
                window.location.href = decodedText;
            }

            scanner.clear();
        },
        (error) => {}
    );
});

onBeforeUnmount(() => {
    if (scanner) {
        scanner
            .clear()
            .catch((err) => console.error("Scanner clear error", err));
    }
});
</script>

<style>
#qr-reader img {
    display: none !important;
}

/* #qr-reader__scan_region img{
  display: block !important;
  
} */
#qr-reader__dashboard_section #html5-qrcode-anchor-scan-type-change {
    display: none !important;
}
#html5-qrcode-button-camera-start,
#html5-qrcode-button-camera-stop {
    background-color: #96b2b5 !important;
    transition: all 0.3s ease-in-out !important;
    border: none !important;
    padding: 10px !important;
    border-radius: 12px !important;
}
#html5-qrcode-button-camera-start:hover,
#html5-qrcode-button-camera-stop:hover {
    background-color: #96b2b5 !important;
    color: #fff !important;
    box-shadow: inset 0 0 0 100px rgba(255, 255, 255, 0.3) !important;
}
.html5-qrcode-button-camera-permission {
    border: 0 !important;
}
</style>
