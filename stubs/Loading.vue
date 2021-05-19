<template>
    <table  v-if="!loading" class="w-full whitespace-nowrap">
        <tr>
            <th>
                 <div class="flex items-center px-6 py-4">
                    <span class="w-full h-4 bg-gray-300 rounded-full animate-pulse"></span>
                </div>
            </th>
        </tr>
        <tr v-for="n in 10" :key="n">
            <td class="border-t">
                <div class="flex items-center px-6 py-4">
                    <span class="w-full h-4 bg-gray-200 rounded-full animate-pulse"></span>
                </div>
            </td>
        </tr>
    </table>
</template>