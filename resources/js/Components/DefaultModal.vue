<script setup>
import { onMounted } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    title: String,
});

let title = props.title;
// const modalTitle = title.charAt(0).toUpperCase() + title.slice(1);
</script>
<template>
    <!-- Main modal -->
    <div
        id="defaultModal"
        tabindex="-1"
        aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"
    >
        <div class="relative w-full h-full max-w-2xl p-4 md:h-auto">
            <!-- Modal content -->
            <div
                class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5"
            >
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600"
                >
                    <h3
                        class="text-lg font-semibold text-gray-900 dark:text-white"
                    >
                        Add <slot name="title" />
                    </h3>
                    <button
                        type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="defaultModal"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <slot name="body" />
            </div>
        </div>
    </div>
</template>
