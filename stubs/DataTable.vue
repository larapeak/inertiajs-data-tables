<template>
    <table  v-if="!loading" class="w-full whitespace-nowrap">
        <tr class="font-bold text-left">
            <th v-for="field in tableFields" :key="field.id" v-on:click="sort(field.id)" class="px-6 py-4">
                <div class="flex items-center cursor-pointer">
                    {{ field.name }}
                    <div v-if="sortId == field.id" class="ml-2 text-gray-500">
                        <span v-if="direction == 'asc'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                            </svg>
                        </span>
                        <span v-if="direction == 'desc'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </th>
        </tr>
        <table-body :tableFields="tableFields" :tabledata="tableData" :model="model" :slug="slug" />
    </table>
    
    <table-loading v-if="loading" />
</template>

<script>
    import TableBody from '@/Shared/DataTables/Body'
    import TableLoading from '@/Shared/DataTables/Loading'

    export default {
        components: {
            TableBody,
            TableLoading,
        },

        props: {
            tableData: Array,
            tableFields: Array,
            filters: Object,
            slug: String,
            model: String,
        },

        data() {
            return {
                sortId: this.filters.field,
                direction: this.filters.direction,
                loading: false,
            }
        },

        methods: {
            sort(field) {
                this.loading = true;

                this.sortId = field;
                this.direction = this.direction === 'asc' ? 'desc' : 'asc';

                this.$inertia.get(this.route(this.model + '.index'), { 'field': this.sortId, 'direction': this.direction });
            }
        }
    }
</script>