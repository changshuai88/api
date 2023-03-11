<!--
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-09 12:02:26
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-11 14:23:57
 * @FilePath: \api\resources\js\Pages\Dashboard.vue
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
-->
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">You're logged in!</div>
        </div>
      </div>
    </div>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <p>
          链接: https://pan.baidu.com/s/1y2mOjjfxPH2lSguSIQhcvQ 提取码: 1111
          复制这段内容后打开百度网盘手机App，操作更方便哦
        </p>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<style  scoped>
/* img {
  width: 50%;
  height: 50%;
} */
</style>
