<template>
    <section v-if="username">
        <!-- <h1>Hello User {{ $route.params.name }}</h1> -->
        <h1>Hello User {{ username }}</h1>
        <router-link :to="{ name: 'User' }">Kembali</router-link>
    </section>
    <section v-else>
        <h1>Daftar User</h1>
        <ul>
            <li :key="user.id" v-for="user in users">
                <!-- <router-link :to="profile_uri(user.name)">
                    {{ user.name }}
                </router-link> -->
                <a href="" @click.prevent="lihatUser(user.name)">{{ user.name }}</a>
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    props: ["username"],
    data() {
        return {
            users: [
                {
                    id: 1,
                    name: "Puspitasari"
                },
                {
                    id: 2,
                    name: "Pratama"
                },
                {
                    id: 3,
                    name: "Muhammad Ibnu"
                },
                {
                    id: 4,
                    name: "Laravel Mix"
                }
            ]
        };
    },
    methods: {
        profile_uri(name) {
            return "/user/" + name.toLowerCase();
        },
        lihatUser(name){
            this.$router.push('/user/' + name.toLowerCase())
            // this.$router.push({
            //     name: 'User',
            //     params: {username: name}
            // })
        }
    }
};
</script>
