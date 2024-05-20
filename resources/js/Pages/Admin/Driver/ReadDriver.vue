<script setup>
const props = defineProps({
    title: String,
    driver: Object,
});

const driver = props.driver;
console.log(driver);
</script>
<template>
    <div class="flex justify-between mb-4 rounded-t sm:mb-5">
        <div class="text-lg text-gray-900 md:text-xl dark:text-white">
            <h3 class="font-semibold">{{ driver.full_name }}</h3>
            <p class="font-bold">$2999</p>
        </div>
        <div>
            <button
                type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="`read${modalTitle}Modal${item.id}`"
            >
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
    </div>
    <dl>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            Full Name
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.full_name }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            Code
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.code }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            Address
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.adresse }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            Phone Number
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.phone }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            Phone Number 2
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.numero_2 }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            CNI
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.cni }}
        </dd>
        <dt
            class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
        >
            CNSS
        </dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
            {{ driver.cnss }}
        </dd>
    </dl>
</template>

<!-- <template>
    <div>
        <div class="flex justify-between mb-4 rounded-t sm:mb-5">
            <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                <h3 class="font-semibold">Apple iMac 27”</h3>
                <p class="font-bold">$2999</p>
            </div>
            <div>
                <button
                    type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="`read${modalTitle}Modal${item.id}`"
                >
                    <svg
                        aria-hidden="true"
                        class="w-5 h-5"
                        fill="currentColor"
                        viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
        </div>
        <dl>
            <dt
                class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
            >
                Details
            </dt>
            <dd
                class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"
            >
                Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7
                processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory,
                Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage,
                Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US.
            </dd>
            <dt
                class="mb-2 font-semibold leading-none text-gray-900 dark:text-white"
            >
                Category
            </dt>
            <dd
                class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"
            >
                Electronics/PC
            </dd>
        </dl>
    </div>
</template> -->
