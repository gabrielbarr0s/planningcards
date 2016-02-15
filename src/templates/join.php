<div class"row">
  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">Join session</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" data-ng-class="{'has-error': join.idError}">
            <label>Session id:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" data-ng-model="join.id" placeholder="4711">
              <span data-ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" data-ng-class="{'has-error': join.nameError}">
            <label>Your name:</label>
            <div class="has-feedback" data-ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  data-ng-model="join.name" placeholder="John">
              <span data-ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Join" data-ng-click="joinSession()">
       </form>
      </div>
    </div>         
  </div>
</div>