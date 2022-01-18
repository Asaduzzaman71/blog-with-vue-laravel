<template>
     <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse"   @click="makeActiveOrInactive()">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
</template>

<script>
export default {
    name:"Header",
    data () {
        return {
            isActive: false,
        }
    },
    methods: {
        makeActiveOrInactive () {
            this.isActive = !this.isActive;
            this.$emit('changeIsActive', this.isActive)
        },

    }

}
</script>

<style>

</style>
