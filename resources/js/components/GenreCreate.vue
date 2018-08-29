<template>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Create New Genre</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" @click.prevent="create">
                   
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" v-model="name" placeholder="Name">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Create</button> 
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      name: ""
    };
  },
  methods: {
    create() {
      axios.post("/admin/genre", { name: this.name });
    }
  }
};
</script>
