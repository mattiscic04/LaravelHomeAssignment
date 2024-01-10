<div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="model" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <input type="text" name="model" id="model" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="year" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <input type="text" name="year" id="year" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="salespersonemail" class="col-md-3 col-form-label">Salesperson Email</label>
                      <div class="col-md-9">
                        <input type="text" name="salespersonemail" id="salespersonemail" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <select name="company_id" id="company_id" class="form-control">
                        @foreach ($manufacturers as $id => $name)
                            <option value="{{$id}}">{{ $name }}</option>
                        @endforeach
                        </select>
                      </div>
                      
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>