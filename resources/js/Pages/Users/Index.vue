<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { computed, ref, watch } from 'vue';
import { debounce } from 'lodash';
import Pagination from '@/Shared/Pagination.vue';

const props = defineProps({ users: Object, filters: Object });
const title = computed(() => 'Users');
const search = ref(props.filters.search ??= '');

watch(search, debounce(value => {
    const options = value !== '' ? { search: value } : {};
    router.get('/users', options, {
        preserveState: true,
        replace: true
    });
}, 300));
</script>

<template>
    <Head :title="title" />
    <div class="flex justify-between mb-6">
        <div class="flex items-baseline">
            <h1 class="text-3xl" v-text="title"></h1>
            <Link href="/users/create" class="text-blue-500 hover:underline text-sm ml-3">New User</Link>
        </div>
        <input v-model="search" placeholder="Search..." class="border px-2 rounded-lg">
    </div>
    <div v-if="users.data.length > 0">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ user.name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                                            Edit
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <Pagination :links="users.links" class="mt-6" />
    </div>
    <div v-else>
        No records found for {{ search }}.
    </div>
</template>
