<!--
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-12 14:47:00
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-12 15:35:15
 * @FilePath: \api\resources\js\Pages\User\Show.vue
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
<script lang="ts" setup>
// import Layout from "./Layout";
import { Head } from "@inertiajs/vue3";
import NavLink from "@/Components/NavLink.vue";
import { Link } from "@inertiajs/vue3";

defineProps({ user: Object });
</script>

<template>
  <!-- <Layout> -->
  <Head title="Welcome" />
  <NavLink :href="route('dashboard')" :active="route().current('dashboard')"
    >dashboard</NavLink
  >
  <h1>Welcome</h1>
  <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
  <!-- </Layout> -->
</template>
