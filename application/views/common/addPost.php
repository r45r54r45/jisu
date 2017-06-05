<!--글쓰기 FAB-->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large pulse deep-purple">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating deep-purple lighten-4"><i class="material-icons">place</i></a></li>
        <li><a class="btn-floating deep-purple lighten-3"><i class="material-icons">movie</i></a></li>
        <li><a class="btn-floating deep-purple lighten-2"><i class="material-icons">dashboard</i></a></li>
        <li><a class="btn-floating deep-purple modal-trigger" href="#modal3"><i class="material-icons">library_add</i></a>
        </li>

    </ul>
</div>


<!-- Modal Structure (Posting)-->

<div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Posting</h4>
        <div class="row">
            <form class="col s12" id="new-post" name="submit" enctype="multipart/form-data" action="/post/add"
                  method="post">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <input type="hidden" name="lat" v-model="lat"/>
                <input type="hidden" name="lng" v-model="lng"/>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input v-on:keyup="searchLoc(location_string)" v-model="location_string" id="loc_name" class="materialize-input" name="location_name"/>
                        <label for="loc_name">장소</label>
                    </div>
                    <ul>
                        <li v-for="loc in location_candidates">
                            <button type="button" v-on:click="selectAddress(loc.coord, loc.address)" v-html="loc.address"></button>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input class="materialize-input" name="title" id="title"/>
                        <label for="title">포스트 제목</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="textarea" class="materialize-textarea" name="content"></textarea>
                        <label for="textarea">내용</label>
                    </div>
                </div>
                <input type="hidden" v-model="movie_id" name="movie_id"/>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <input id="movie_title" class="materialize-textarea" v-model="movie_title"
                               onkeyup="searchMovie('movie_title', app5); return true;"/>
                        <!--                        <label for="movie_title">영화 제목</label>-->
                    </div>
                    <ul>
                        <li v-for="item in list">
                            <button type="button" v-on:click="select(item.id, item.title)" v-html="item.title"></button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="action" form="new-post">Submit
            <i class="material-icons right">send</i>
        </button>
    </div>
</div>
<script>
    var app5 = new Vue({
    el: '#modal3',
        data: {
        list: [],
            movie_title: '',
            movie_id: null,
            location_string: '',
            location_candidates: [],
            lat: 0,
            lng:0
        },
        methods: {
        select: function (id, title) {
            this.movie_title = title;
            this.movie_id = id;
            this.list = [];
        },
        searchLoc: function(loc){
            var _this = this;
            codeAddress(loc, function(candidates, coord){
                _this.location_candidates = candidates;
            })
            },
        selectAddress: function(coord, address){
            this.location_string = address;
            this.lat = coord.lat();
            this.lng = coord.lng();
            this.location_candidates = [];
        }
    }
    })

</script>