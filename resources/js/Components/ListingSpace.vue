<template>
    <div>
        <span class="font-bold">{{listing.beds }} </span> bds <span class="text-gray-400">|</span>
        &nbsp;<span class="font-bold">{{listing.baths }} </span> ba <span class="text-gray-400">|</span>
        &nbsp;<span class="font-bold">{{listing.area }} </span>  m²<span class="text-gray-400">|</span>
    </div>

  </template>

  <script setup>
  defineProps({
    listing: Object,
  })
  </script>
