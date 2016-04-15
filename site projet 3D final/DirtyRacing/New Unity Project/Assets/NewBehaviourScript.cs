using UnityEngine;
using System.Collections;

public class NewBehaviourScript : MonoBehaviour {
	private float temps = 0.0f;
	public TextMesh ui;

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
		temps += Time.timeSinceLevelLoad;
		ui.text = temps.ToString ("##.##");

	}
}
