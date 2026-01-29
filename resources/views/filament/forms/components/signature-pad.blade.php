<div class="w-full" 
     wire:ignore 
     x-data="{
        signaturePad: null,
        value: @entangle($getStatePath()),
        init() {
            // Configuración del canvas para que no se vea borroso
            const canvas = this.$refs.canvas;
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            
            // Ajustamos el tamaño interno del canvas al tamaño visual
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext('2d').scale(ratio, ratio);

            this.signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'rgba(255, 255, 255, 0)',
                penColor: 'rgb(0, 0, 0)'
            });

            // Si ya hay una firma guardada (al editar), la cargamos
            if (this.value) {
                this.signaturePad.fromDataURL(this.value);
            }

            // Capturamos el evento de fin de trazo para sincronizar con Livewire
            this.signaturePad.addEventListener('endStroke', () => {
                if (this.signaturePad.isEmpty()) {
                    this.value = null;
                } else {
                    this.value = this.signaturePad.toDataURL();
                }
            });
        },
        clear() {
            this.signaturePad.clear();
            this.value = null;
        }
    }">
    
    <div class="bg-white border rounded-lg overflow-hidden" 
         style="border: 2px dashed #ccc; min-height: 160px;">
        <canvas x-ref="canvas" 
                class="w-full h-40 touch-none cursor-crosshair" 
                style="background-color: #fdfdfd; width: 100%; height: 160px;"></canvas>
    </div>

    <div class="mt-2 flex justify-between items-center">
        <span class="text-xs text-gray-500">Firme dentro del recuadro</span>
        <button type="button" 
                x-on:click="clear" 
                class="text-xs bg-red-600 hover:bg-red-700 text-white px-4 py-1.5 rounded-lg shadow-sm transition">
            Borrar Firma
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
</div>