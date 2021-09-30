<template>
    <section v-if="$route.params.name">
        <!-- <h1>Hello User {{ $route.params.name }}</h1> -->
        <h1>Hello User {{ name }}</h1>
    </section>
    <section v-else>
        <h1>Daftar User</h1>
    </section>
</template>

<script>
export default {
    props: ['name']
}
</script>