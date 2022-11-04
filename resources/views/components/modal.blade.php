<div x-data="{ show: @entangle($attributes->wire('model'))}">
    {{ $button }}
    <div
        x-show="show"
        class="relative z-10"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true"
        style="display:none">
        <div class="flex"
             x-show="show"
             x-transition:enter="ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
        >
            <!--
              Background backdrop, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                    >
                    <!--
                      Modal panel, show/hide based on modal state.

                      Entering: "ease-out duration-300"
                        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        To: "opacity-100 translate-y-0 sm:scale-100"
                      Leaving: "ease-in duration-200"
                        From: "opacity-100 translate-y-0 sm:scale-100"
                        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    -->
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl w-full"
                        x-show="show"
                        x-transition:enter="ease-out duration-500"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-75"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-75">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                        {!! $title ?? '' !!}
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            {!! $slot ?? '' !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            {!! $footer !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
