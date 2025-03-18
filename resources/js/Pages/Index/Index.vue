

<template>
    <div>
        Index
    </div>
    <Link href="/hello">
    Show Page
    </Link>
    <div>
        <!-- This is message {{ message }} -->
    </div>

</template>


<script setup>

import { Link } from '@inertiajs/vue3';

defineProps({
'message': String
})


</script>

<!-- <script>
import MainLayout from '../../Layouts/MainLayout.vue';

export default {
// layout: MainLayout,
}
</script> -->
